@extends(config('laravelusers.laravelUsersBladeExtended'))

@section('template_title')
  @lang('laravelusers.editing-user', ['name' => $gift->name])
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
                            @lang('laravelusers.editing-user', ['name' => $gift->name])
                            <div class="pull-right">
                                <a href="{{ route('gifts') }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="top" title="@lang('laravelusers.tooltips.back-users')">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fas fa-fw fa-reply-all" aria-hidden="true"></i>
                                    @endif
                                    {!! trans('laravelusers.buttons.back-to-users') !!}
                                </a>
                                <a href="{{ url('/manage/gifts/' . $gift->id) }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="@lang('laravelusers.tooltips.back-users')">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fas fa-fw fa-reply" aria-hidden="true"></i>
                                    @endif
                                    {!! trans('laravelusers.buttons.back-to-user') !!}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' => ['gifts.update', $gift->id], 'method' => 'PUT', 'role' => 'form', 'class' => 'needs-validation')) !!}
                            {!! csrf_field() !!}
                        <div class="row">
                                <table>
                                    <tr class="row">
                                        <div class="col-md-3">Chọn danh mục</div>
                                        <div class="col-md-9">
                                            <select class="browser-default custom-select mb-4" name="category_id">
                                                <option value="0">--Chọn danh mục sản phẩm--</option>
                                                @foreach($category as $item)
                                                    <option value="{{$item -> id}}" {{ $gift->category->id == $item->id ? 'selected="selected"' : '' }}>{{$item -> name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </tr>
                                    <tr class="row">
                                        <div class="col-md-3">Tên sản phẩm</div>
                                        <div class="col-md-9">
                                            <input type="text" id="defaultContactFormName" class="form-control mb-4"
                                                   placeholder="Tên sản phẩm" name="name" value="{{ $gift->name }}">
                                            @if($errors->has('name'))
                                                <label class="text-danger float-right">*{{$errors->first('name')}}</label>
                                            @endif
                                        </div>
                                    </tr>
                                    <tr class="row">
                                        <div class="col-md-3">Mô tả sản phẩm</div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                                              placeholder="{{ $gift->description }}" name="description"></textarea>
                                                @if($errors->has('description'))
                                                    <label class="text-danger float-right">*{{$errors->first('description')}}</label>
                                                @endif
                                            </div>
                                        </div>
                                    </tr>
                                    <tr class="row">
                                    <div class="col-md-3">Chọn độ tuổi sản phẩm</div>
                                    <div class="col-md-9">
                                        <select class="browser-default custom-select mb-4 mt-4" name="age_range">
                                            <option value="0">--Mọi lứa tuổi--</option>
                                            <option value="1" {{ $gift->age_range == 1 ? 'selected="selected"' : '' }}>Dưới 6 tháng</option>
                                            <option value="2" {{ $gift->age_range == 2 ? 'selected="selected"' : '' }}>6 - 12 tháng</option>
                                            <option value="3" {{ $gift->age_range == 3 ? 'selected="selected"' : '' }}>12 - 24 tháng</option>
                                            <option value="4" {{ $gift->age_range == 4 ? 'selected="selected"' : '' }}>Trên 24 tháng</option>
                                        </select>
                                    </div>
                                    </tr>
                                    <tr class="row">
                                        <div class="col-md-3">Số điện thoại</div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control mb-4"
                                                   placeholder="Số điện thoại" name="phone_number" value="{{ $gift->account->account->phone }}" disabled>
                                            @if($errors->has('phone_number'))
                                                <label class="text-danger float-right">*{{$errors->first('phone_number')}}</label>
                                            @endif

                                        </div>
                                    </tr>
                                    <tr class="row">
                                        <div class="col-md-3">Giới tính</div>
                                        <div class="col-md-9">
                                            <select class="browser-default custom-select mb-4" name="gender">
                                                <option value="0">--Tất cả--</option>
                                                <option value="1" {{ $gift->gender == 1 ? 'selected="selected"' : '' }}>Nam</option>
                                                <option value="2" {{ $gift->gender == 2 ? 'selected="selected"' : '' }}>Nữ</option>
                                            </select>
                                        </div>
                                    </tr>
                                    <tr class="row">
                                        <div class="col-md-3">Địa chỉ</div>
                                        <div class="col-md-9">
                                    <textarea type="text" id="defaultContactFormName" class="form-control mb-4"
                                              placeholder="Địa điểm nơi có thể giao dịch sản phẩm"
                                              name="address" value="{{ $gift->account->account->address }}" disabled></textarea>
                                        </div>
                                    </tr>
                                </table>
                        </div>

                        <div class="form-group has-feedback row">
                            @if(config('laravelusers.fontAwesomeEnabled'))
                                {!! Form::label('category', "Category ID", array('class' => 'col-md-3 control-label')); !!}
                            @endif
                            <div class="col-md-9">
                                <div class="input-group">
                                    {!! Form::text('category', $gift->category->id, array('id' => 'category', 'class' => 'form-control')) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="category">
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
                            <div class="row">

                                <div class="col-12">
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

