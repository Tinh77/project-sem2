@extends(config('laravelusers.laravelUsersBladeExtended'))

@section('template_title')
    @lang('laravelusers.showing-user', ['name' => $user->username])
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
                <div class="col-lg-10 offset-lg-1">
                    @include('vendor.laravelusers.partials.form-status')
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            @lang('laravelusers.showing-user-title', ['name' => $user->username])
                            <div class="float-right">
                                <a href="{{ route('users') }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="@lang('laravelusers.tooltips.back-users')">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fas fa-fw fa-reply-all" aria-hidden="true"></i>
                                    @endif
                                    @lang('laravelusers.buttons.back-to-users')
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="text-muted text-center">
                            {{ $user->username }}
                        </h4>
                        @if($user->account->email)
                            <p class="text-center" data-toggle="tooltip" data-placement="top" title="@lang('laravelusers.tooltips.email-user', ['user' => $user->account->email])">
                                {{ Html::mailto($user->account->email, $user->account->email) }}
                            </p>
                        @endif
                        <div class="row mb-4">
                            <div class="col-3 offset-3 col-sm-4 offset-sm-2 col-md-4 offset-md-2 col-lg-3 offset-lg-3">
                                <a href="/manage/users/{{$user->id}}/edit" class="btn btn-block btn-md btn-warning">
                                    @lang('laravelusers.buttons.edit-user')
                                </a>
                            </div>
                            <div class="col-3 col-sm-4 col-md-4 col-lg-3">
                                {!! Form::open(array('url' => 'manage/users/' . $user->id, 'class' => 'form-inline')) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::button(trans('laravelusers.buttons.delete-user'), array('class' => 'btn btn-danger btn-md btn-block','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-4 col-sm-3">
                                        <strong>
                                            @lang('laravelusers.show-user.id')
                                        </strong>
                                    </div>
                                    <div class="col-8 col-sm-9">
                                        {{ $user->id }}
                                    </div>
                                </div>
                            </li>
                            @if(config('laravelusers.rolesEnabled'))
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                {{ trans('laravelusers.show-user.labelRole') }}
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            @foreach ($user->roles as $user_role)
                                                @if ($user_role->name == 'Admin')
                                                    @php $labelClass = 'danger' @endphp
                                                @else
                                                    @php $labelClass = 'info' @endphp
                                                @endif
                                                <span class="badge badge-{{$labelClass}}">{{ $user_role->name }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-12 col-sm-3">
                                            <strong>
                                                {!! trans_choice('laravelusers.show-user.labelAccessLevel', 1) !!}
                                            </strong>
                                        </div>
                                        <div class="col-12 col-sm-9">
                                            @if($user->level() == 5)
                                                <span class="badge badge-danger margin-half margin-left-0">Admin</span>
                                            @endif
                                            @if ($user->level() >= 4)
                                                <span class="badge badge-success margin-half margin-left-0">Moderator</span>
                                            @else
                                                <span class="badge badge-info margin-half margin-left-0">Member</span>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($user->account->first_name)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                @lang('laravelusers.show-user.created')
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->first_name }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($user->account->last_name)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                @lang('laravelusers.show-user.updated')
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->last_name }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($user->account->phone)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                Phone
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->phone }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($user->account->address)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                Address
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->address }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($user->account->gender)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                Gender
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->gender }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($user->account->age)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                Age
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->age }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($user->account->intro)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                Intro
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->intro }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('vendor.laravelusers.modals.modal-delete')
@endsection

@section('template_scripts')
    @include('vendor.laravelusers.scripts.delete-modal-script')
    @if(config('laravelusers.tooltipsEnabled'))
        @include('vendor.laravelusers.scripts.tooltips')
    @endif
@endsection
