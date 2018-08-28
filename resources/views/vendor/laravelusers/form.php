// edit
<div class="form-group has-feedback row {{ $errors->has('aaaaaa') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('aaaaaa', 'bbbbbb', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('aaaaaa', $user->aaaaaa, ['id' => 'aaaaaa', 'class' => 'form-control', 'placeholder' => 'bbbbbb']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="aaaaaa">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_aaaaaa') }}" aria-hidden="true"></i>
                                            @else
                                                bbbbbb
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('aaaaaa'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('aaaaaa') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
// show
@if ($user->account->aaaaaa)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                bbbbbb
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            {{ $user->account->aaaaaa }}
                                        </div>
                                    </div>
                                </li>
                            @endif
// create
<div class="form-group has-feedback row {{ $errors->has('aaaaaa') ? ' has-error ' : '' }}">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('aaaaaa', 'bbbbbb', array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('aaaaaa', NULL, ['id' => 'aaaaaa', 'class' => 'form-control', 'placeholder' => 'bbbbbb']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="aaaaaa">
                                            @if(config('laravelusers.fontAwesomeEnabled'))
                                                <i class="fa fa-fw {{ trans('forms.create_user_icon_aaaaaa') }}" aria-hidden="true"></i>
                                            @else
                                                bbbbbb
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('aaaaaa'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('aaaaaa') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
