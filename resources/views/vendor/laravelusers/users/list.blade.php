@extends(config('laravelusers.laravelUsersBladeExtended'))

@section('template_title')
    @lang('laravelusers.showing-all-users')
@endsection

@section('template_linked_css')
    @if(config('laravelusers.enabledDatatablesJs'))
        <link rel="stylesheet" type="text/css" href="{{ config('laravelusers.datatablesCssCDN') }}">
    @endif
    @if(config('laravelusers.fontAwesomeEnabled'))
        <link rel="stylesheet" type="text/css" href="{{ config('laravelusers.fontAwesomeCdn') }}">
    @endif
    @include('vendor.laravelusers.partials.styles')
    @include('vendor.laravelusers.partials.bs-visibility-css')
@endsection

@section('content')
    <div class="container">
        @if(config('laravelusers.enablePackageBootstapAlerts'))
            <div class="row">
                <div class="col-sm-12">
                    @include('vendor.laravelusers.partials.form-status')
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                @lang('laravelusers.showing-all-users')
                            </span>

                            <div class="btn-group pull-right btn-group-xs">
                                @if(config('laravelusers.softDeletedEnabled'))
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                        <span class="sr-only">
                                            @lang('laravelusers.users-menu-alt')
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('users.create') }}">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                                @endif
                                                @lang('laravelusers.buttons.create-new')
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/manage/users/deleted">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw fa-group" aria-hidden="true"></i>
                                                @endif
                                                @lang('laravelusers.show-deleted-users')
                                            </a>
                                        </li>
                                    </ul>
                                @else
                                    <a href="{{ route('users.create') }}" class="btn btn-default btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="@lang('laravelusers.tooltips.create-new')">
                                        @if(config('laravelusers.fontAwesomeEnabled'))
                                            <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                        @endif
                                        @lang('laravelusers.buttons.create-new')
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        @if(config('laravelusers.enableSearchUsers'))
                            @include('vendor.laravelusers.partials.search-users-form')
                        @endif

                        <div class="table-responsive users-table">
                            <table class="table table-striped table-sm data-table">
                                <caption id="user_count">
                                    {{ trans_choice('laravelusers.users-table.caption', 1, ['userscount' => $users->count()]) }}
                                </caption>
                                <thead class="thead">
                                    <tr>
                                        <th>@lang('laravelusers.users-table.id')</th>
                                        <th>@lang('laravelusers.users-table.name')</th>
                                        <th class="hidden-xs">@lang('laravelusers.users-table.email')</th>
                                        @if(config('laravelusers.rolesEnabled'))
                                            <th class="hidden-sm hidden-xs">@lang('laravelusers.users-table.role')</th>
                                        @endif
                                        <th class="hidden-sm hidden-xs hidden-md">@lang('laravelusers.users-table.status')</th>
                                        <th class="no-search no-sort">@lang('laravelusers.users-table.actions')</th>
                                        <th class="no-search no-sort"></th>
                                        <th class="no-search no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody id="users_table">
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->username}}</td>
                                            <td class="hidden-xs">{{$user->account->email}}</td>
                                            @if(config('laravelusers.rolesEnabled'))
                                                <td class="hidden-sm hidden-xs">
                                                    @foreach ($user->roles as $user_role)
                                                        @if ($user_role->name == 'User')
                                                            @php $badgeClass = 'primary' @endphp
                                                        @elseif ($user_role->name == 'Admin')
                                                            @php $badgeClass = 'warning' @endphp
                                                        @elseif ($user_role->name == 'Unverified')
                                                            @php $badgeClass = 'danger' @endphp
                                                        @else
                                                            @php $badgeClass = 'dark' @endphp
                                                        @endif
                                                        <span class="badge badge-{{$badgeClass}}">{{ $user_role->name }}</span>
                                                    @endforeach
                                                </td>
                                            @endif
                                            <td class="hidden-sm hidden-xs hidden-md">{{$user->status}}</td>
                                            <td>
                                                {!! Form::open(array('url' => 'manage/users/' . $user->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => trans('laravelusers.tooltips.delete'))) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::button(trans('laravelusers.buttons.delete'), array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => trans('modals.delete_user_title'), 'data-message' => trans('modals.delete_user_message', ['user' => $user->username]))) !!}
                                                {!! Form::close() !!}
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('manage/users/' . $user->id) }}" data-toggle="tooltip" title="@lang('laravelusers.tooltips.show')">
                                                    @lang('laravelusers.buttons.show')
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-info btn-block" href="{{ URL::to('manage/users/' . $user->id . '/edit') }}" data-toggle="tooltip" title="@lang('laravelusers.tooltips.edit')">
                                                    @lang('laravelusers.buttons.edit')
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @if(config('laravelusers.enableSearchUsers'))
                                    <tbody id="search_results"></tbody>
                                @endif
                            </table>

                            @if($pagintaionEnabled)
                                {{ $users->links() }}
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('vendor.laravelusers.modals.modal-delete')

@endsection

@section('template_scripts')
    @if ((count($users) > config('laravelusers.datatablesJsStartCount')) && config('laravelusers.enabledDatatablesJs'))
        @include('vendor.laravelusers.scripts.datatables')
    @endif
    @include('vendor.laravelusers.scripts.delete-modal-script')
    @include('vendor.laravelusers.scripts.save-modal-script')
    @if(config('laravelusers.tooltipsEnabled'))
        @include('vendor.laravelusers.scripts.tooltips')
    @endif
    @if(config('laravelusers.enableSearchUsers'))
        @include('vendor.laravelusers.scripts.search-users')
    @endif

@endsection
