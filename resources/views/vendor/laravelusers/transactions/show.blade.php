@extends(config('laravelusers.laravelUsersBladeExtended'))

@section('template_title')
    @lang('laravelusers.showing-user', ['name' => $transaction->name])
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
                            @lang('laravelusers.showing-user-title', ['name' => $transaction->id])
                            <div class="float-right">
                                <a href="{{ route('users') }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="@lang('laravelusers.tooltips.back-users')">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fas fa-fw fa-reply-all" aria-hidden="true"></i>
                                    @endif
                                        {!! trans('laravelusers.buttons.back-to-users') !!}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="text-muted text-center">
                            {{ $transaction->id }}
                        </h4>
                        <div class="row mb-4">
                            <div class="col-3 offset-3 col-sm-4 offset-sm-2 col-md-4 offset-md-2 col-lg-3 offset-lg-3">
                                <a href="/manage/transactions/{{$transaction->id}}/edit" class="btn btn-block btn-md btn-warning">
                                    {{__('Change Status')}}
                                </a>
                            </div>
                            <div class="col-3 col-sm-4 col-md-4 col-lg-3">
                                {!! Form::open(array('url' => 'manage/transactions/' . $transaction->id, 'class' => 'form-inline')) !!}
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
                                        {{ $transaction->id }}
                                    </div>
                                </div>
                            </li>
                            @if ($transaction->owner->username)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                {{ __('Owner') }}
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $transaction->owner->username }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($transaction->buyer->username)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-12 col-sm-3">
                                            <strong>
                                                {{ __('Buyer') }}
                                            </strong>
                                        </div>
                                        <div class="col-12 col-sm-9">
                                            {{ $transaction->buyer->username }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($transaction->gift->id)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-12 col-sm-3">
                                            <strong>
                                                {{ __('Gift ID') }}
                                            </strong>
                                        </div>
                                        <div class="col-12 col-sm-9">
                                            {{ $transaction->gift->id }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($transaction->gift->name)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-12 col-sm-3">
                                            <strong>
                                                {{ __('Gift Name') }}
                                            </strong>
                                        </div>
                                        <div class="col-12 col-sm-9">
                                            {{ $transaction->gift->name }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($transaction->created_at)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                {{ __('Created') }}
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $transaction->created_at }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($transaction->updated_at)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                {{ __('Updated') }}
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $transaction->updated_at }}
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($transaction->status)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                {{ __('Status') }}
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $transaction->status }}
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
