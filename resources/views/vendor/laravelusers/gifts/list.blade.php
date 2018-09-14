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
                                Showing All Gifts
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
                                            <a href="{{ route('gifts.create') }}">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                                @endif
                                                {!! trans('laravelusers.buttons.create-new') !!}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/manage/gifts/deleted">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw fa-group" aria-hidden="true"></i>
                                                @endif
                                                @lang('laravelusers.show-deleted-users')
                                            </a>
                                        </li>
                                    </ul>
                                @else
                                    <a href="{{ route('gifts.create') }}" class="btn btn-default btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="@lang('laravelusers.tooltips.create-new')">
                                        @if(config('laravelusers.fontAwesomeEnabled'))
                                            <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                        @endif
                                        {!! trans('laravelusers.buttons.create-new') !!}
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
                                    {{ trans_choice('laravelusers.users-table.caption', 1, ['userscount' => $gifts->count()]) }}
                                </caption>
                                <thead class="thead">
                                    <tr>
                                        <th>@lang('laravelusers.users-table.id')</th>
                                        <th>{{ __('Name') }}</th>
                                        <th class="hidden-xs">{{ __('Category') }}</th>
                                        <th class="hidden-xs">{{ __('Images') }}</th>
                                        <th class="hidden-sm hidden-xs hidden-md">@lang('laravelusers.users-table.created')</th>
                                        <th class="hidden-sm hidden-xs hidden-md">@lang('laravelusers.users-table.updated')</th>
                                        <th class="hidden-sm hidden-xs hidden-md">@lang('laravelusers.users-table.status')</th>
                                        <th class="no-search no-sort">@lang('laravelusers.users-table.actions')</th>
                                        <th class="no-search no-sort"></th>
                                        <th class="no-search no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody id="users_table">
                                    @foreach($gifts as $gift)
                                        <tr>
                                            <td>{{$gift->id}}</td>
                                            <td>{{$gift->name}}</td>
                                            <td class="hidden-xs">{{$gift->category->name}}</td>
                                            <td class="hidden-xs"><img src="{{\JD\Cloudder\Facades\Cloudder::show($gift->images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}"
                                                                       alt="quanganh9x" class="img-fluid" style="height: 50px; width: 50px;"></td>
                                            <td class="hidden-sm hidden-xs hidden-md">{{$gift->created_at}}</td>
                                            <td class="hidden-sm hidden-xs hidden-md">{{$gift->updated_at}}</td>
                                            <th class="hidden-sm hidden-xs hidden-md">{{$gift->status}}</th>
                                            <td>
                                                {!! Form::open(array('url' => 'manage/gifts/' . $gift->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => trans('laravelusers.tooltips.delete'))) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::button(trans('laravelusers.buttons.delete'), array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => trans('modals.delete_user_title'), 'data-message' => trans('modals.delete_user_message', ['user' => $gift->name]))) !!}
                                                {!! Form::close() !!}
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('manage/gifts/' . $gift->id) }}" data-toggle="tooltip" title="@lang('laravelusers.tooltips.show')">
                                                    {!! trans('laravelusers.buttons.show')  !!}
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-info btn-block" href="{{ URL::to('manage/gifts/' . $gift->id . '/edit') }}" data-toggle="tooltip" title="@lang('laravelusers.tooltips.edit')">
                                                    {!! trans('laravelusers.buttons.edit') !!}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @if(config('laravelusers.enableSearchGifts'))
                                    <tbody id="search_results"></tbody>
                                @endif
                            </table>

                            @if($pagintaionEnabled)
                                {{ $gifts->links() }}
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
    @if ((count($gifts) > config('laravelusers.datatablesJsStartCount')) && config('laravelusers.enabledDatatablesJs'))
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
