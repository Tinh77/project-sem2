@extends('admin.layout.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
            <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>

        {{--<li class="breadcrumb-menu d-md-down-none">--}}
        {{--<div class="btn-group" role="group" aria-label="Button group">--}}
        {{--<a class="btn" href="#">--}}
        {{--<i class="icon-speech"></i>--}}
        {{--</a>--}}
        {{--<a class="btn" href="./">--}}
        {{--<i class="icon-graph"></i> &nbsp;Dashboard</a>--}}
        {{--<a class="btn" href="#">--}}
        {{--<i class="icon-settings"></i> &nbsp;Settings</a>--}}
        {{--</div>--}}
        {{--</li>--}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="icon-note"></i> Create Form Product
                            <div class="card-header-actions">
                                <a href="https://github.com/jzaefferer/jquery-validation"
                                   class="card-header-action" target="_blank">
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form id="signupForm" novalidate="novalidate">
                                        <div class="form-group">
                                            <label class="col-form-label" for="name">Product Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname"
                                                   placeholder="First name">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Price</label>
                                            <input type="number" class="form-control" name="price"
                                                   placeholder="Number">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Description</label>
                                            <div>
                                                <textarea name="description" rows="5"
                                                          class="form-control" placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Category Product</label>
                                            <div>
                                                <select name="multiple-select" class="form-control">
                                                    <option value="1">All</option>
                                                    <option value="2">Option #2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Address</label>
                                            <input type="text" class="form-control" name="firstname"
                                                   placeholder="Country name">
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Gender</label>
                                            <div class="col-md-9 col-form-label">
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" type="radio" id="inline-radio1"
                                                           value="option1" name="inline-radios">
                                                    <label class="form-check-label" for="inline-radio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" type="radio" id="inline-radio2"
                                                           value="option2" name="inline-radios">
                                                    <label class="form-check-label" for="inline-radio2">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div>
                                                <input type="file" name="price">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="agree" name="agree" value="agree"> Please
                                                    agree to our policy
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">
                                                Sign up
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection