@extends(config('laravelusers.laravelUsersBladeExtended'))

@section('template_title')
    @lang('laravelusers.create-new-user')
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
                            @lang('laravelusers.create-new-user')
                            <div class="pull-right">
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
                        {!! Form::open(array('route' => 'gifts.store', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
                            {!! csrf_field() !!}
                        <div class="form-group has-feedback row {{ $errors->has('account_id') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('account_id', 'Account ID', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('account_id', NULL, ['id' => 'account_id', 'class' => 'form-control', 'placeholder' => 'Account ID']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="account_id">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_account_id') }}" aria-hidden="true"></i>
                                            @else
                                                Account ID
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('account_id'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('account_id') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('category_id') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('category_id', 'Category ID', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('category_id', NULL, ['id' => 'category_id', 'class' => 'form-control', 'placeholder' => 'Category ID']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="category_id">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_category_id') }}" aria-hidden="true"></i>
                                            @else
                                                Category ID
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('name', 'Name', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('name', NULL, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="name">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_name') }}" aria-hidden="true"></i>
                                            @else
                                                Name
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('description') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('description', 'Description', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('description', NULL, ['id' => 'description', 'class' => 'form-control', 'placeholder' => 'Description']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="description">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_description') }}" aria-hidden="true"></i>
                                            @else
                                                Description
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('images') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('images', 'Thumbnail', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('images', NULL, ['id' => 'images', 'class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="images">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_images') }}" aria-hidden="true"></i>
                                            @else
                                                Thumbnail
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('images'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('images') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('age_range') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('age_range', 'Age Range', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('age_range', NULL, ['id' => 'age_range', 'class' => 'form-control', 'placeholder' => 'Age Range']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="age_range">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_age_range') }}" aria-hidden="true"></i>
                                            @else
                                                Age Range
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('age_range'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('age_range') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('gender') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('gender', 'Gender', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('gender', NULL, ['id' => 'gender', 'class' => 'form-control', 'placeholder' => 'Gender']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="gender">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_gender') }}" aria-hidden="true"></i>
                                            @else
                                                Gender
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                            {!! Form::button(trans('forms.create_user_button_text'), array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts')
    @if(config('laravelusers.tooltipsEnabled'))
        @include('vendor.laravelusers.scripts.tooltips')
    @endif
@endsection
