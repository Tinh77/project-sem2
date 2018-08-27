@extends(config('laravelusers.laravelUsersBladeExtended'))

@section('template_title')
  @lang('laravelusers.editing-user', ['name' => $user->username])
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
                            @lang('laravelusers.editing-user', ['name' => $user->username])
                            <div class="pull-right">
                                <a href="{{ route('users') }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="top" title="@lang('laravelusers.tooltips.back-users')">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fas fa-fw fa-reply-all" aria-hidden="true"></i>
                                    @endif
                                    @lang('laravelusers.buttons.back-to-users')
                                </a>
                                <a href="{{ url('/manage/users/' . $user->id) }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="@lang('laravelusers.tooltips.back-users')">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fas fa-fw fa-reply" aria-hidden="true"></i>
                                    @endif
                                    @lang('laravelusers.buttons.back-to-user')
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' => ['users.update', $user->id], 'method' => 'PUT', 'role' => 'form', 'class' => 'needs-validation')) !!}
                            {!! csrf_field() !!}
                            <div class="form-group has-feedback row {{ $errors->has('username') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('username', trans('forms.create_user_label_username'), array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('username', $user->username, ['id' => 'username', 'class' => 'form-control', 'placeholder' => trans('forms.create_user_ph_username'), 'disabled' => true]) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="username">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {{ trans('forms.create_user_icon_username') }}" aria-hidden="true"></i>
                                                @else
                                                    @lang('forms.create_user_label_username')
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('email') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('email', trans('forms.create_user_label_email'), array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('email', $user->account->email, ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('forms.create_user_ph_email'), 'disabled' => true]) !!}
                                        <div class="input-group-append">
                                            <label for="email" class="input-group-text">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {{ trans('forms.create_user_icon_email') }}" aria-hidden="true"></i>
                                                @else
                                                    @lang('forms.create_user_label_email')
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($rolesEnabled)
                                <div class="form-group has-feedback row {{ $errors->has('role') ? ' has-error ' : '' }}">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        {!! Form::label('role', trans('forms.create_user_label_role'), array('class' => 'col-md-3 control-label')); !!}
                                    @endif
                                    <div class="col-md-9">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="role" id="role">
                                            <option value="">{{ trans('forms.create_user_ph_role') }}</option>
                                            @if ($roles)
                                                @foreach($roles as $role)
                                                    @if ($currentRole)
                                                        <option value="{{ $role->id }}" {{ $currentRole->id == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>
                                                    @else
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="role">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="{{ trans('forms.create_user_icon_role') }}" aria-hidden="true"></i>
                                                @else
                                                    @lang('forms.create_user_label_username')
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            @endif
                            <div class="pw-change-container">
                                <div class="form-group has-feedback row {{ $errors->has('password') ? ' has-error ' : '' }}">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        {!! Form::label('password', trans('forms.create_user_label_password'), array('class' => 'col-md-3 control-label')); !!}
                                    @endif
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            {!! Form::password('password', array('id' => 'password', 'class' => 'form-control ', 'placeholder' => trans('forms.create_user_ph_password'))) !!}
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="password">
                                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                                        <i class="fa fa-fw {{ trans('forms.create_user_icon_password') }}" aria-hidden="true"></i>
                                                    @else
                                                        @lang('forms.create_user_label_password')
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group has-feedback row {{ $errors->has('password_confirmation') ? ' has-error ' : '' }}">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        {!! Form::label('password_confirmation', trans('forms.create_user_label_pw_confirmation'), array('class' => 'col-md-3 control-label')); !!}
                                    @endif
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            {!! Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => trans('forms.create_user_ph_pw_confirmation'))) !!}
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="password_confirmation">
                                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                                        <i class="fa fa-fw {{ trans('forms.create_user_icon_pw_confirmation') }}" aria-hidden="true"></i>
                                                    @else
                                                        @lang('forms.create_user_label_pw_confirmation')
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        <div class="form-group has-feedback row {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('first_name', 'First Name', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('first_name', $user->account->first_name, ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'First Name']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="first_name">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_first_name') }}" aria-hidden="true"></i>
                                            @else
                                                First Name
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('last_name') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('last_name', 'Last Name', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('last_name', $user->account->last_name, ['id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="last_name">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_last_name') }}" aria-hidden="true"></i>
                                            @else
                                                Last Name
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('phone') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('phone', 'Phone', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('phone', $user->account->phone, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Phone']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="phone">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_phone') }}" aria-hidden="true"></i>
                                            @else
                                                Phone
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('address') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('address', 'Address', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('address', $user->account->address, ['id' => 'address', 'class' => 'form-control', 'placeholder' => 'Address']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="address">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_address') }}" aria-hidden="true"></i>
                                            @else
                                                Address
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
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
                                    {!! Form::text('gender', $user->account->gender, ['id' => 'gender', 'class' => 'form-control', 'placeholder' => 'Gender']) !!}
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
                        <div class="form-group has-feedback row {{ $errors->has('age') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('age', 'Age', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('age', $user->account->age, ['id' => 'age', 'class' => 'form-control', 'placeholder' => 'Age']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="age">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_age') }}" aria-hidden="true"></i>
                                            @else
                                                Age
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('age'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback row {{ $errors->has('intro') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('intro', 'Intro', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('intro', $user->account->intro, ['id' => 'intro', 'class' => 'form-control', 'placeholder' => 'Intro']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="intro">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_intro') }}" aria-hidden="true"></i>
                                            @else
                                                Intro
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('intro'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('intro') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-2">
                                    <a href="#" class="btn btn-outline-secondary btn-block btn-change-pw mt-3" title="@lang('forms.change-pw')">
                                        <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
                                        <span></span> @lang('forms.change-pw')
                                    </a>
                                </div>
                                <div class="col-12 col-sm-6">
                                    {!! Form::button(trans('forms.save-changes'), array('class' => 'btn btn-success btn-block margin-bottom-1 mt-3 mb-2 btn-save','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmSave', 'data-title' => trans('modals.edit_user__modal_text_confirm_title'), 'data-message' => trans('modals.edit_user__modal_text_confirm_message'))) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('vendor.laravelusers.modals.modal-save')
    @include('vendor.laravelusers.modals.modal-delete')

@endsection

@section('template_scripts')
    @include('vendor.laravelusers.scripts.delete-modal-script')
    @include('vendor.laravelusers.scripts.save-modal-script')
    @include('vendor.laravelusers.scripts.check-changed')
    @if(config('laravelusers.tooltipsEnabled'))
        @include('vendor.laravelusers.scripts.tooltips')
    @endif
@endsection

