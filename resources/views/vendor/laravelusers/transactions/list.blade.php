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
                                Showing All Transactions
                            </span>
                        </div>
                    </div>
                    <div class="card-body">

                        @if(config('laravelusers.enableSearchTransactions'))
                            @include('vendor.laravelusers.partials.search-users-form')
                        @endif

                        <div class="table-responsive users-table">
                            <table class="table table-striped table-sm data-table">
                                <caption id="user_count">
                                    {{ trans_choice('laravelusers.users-table.caption', 1, ['userscount' => $transactions->count()]) }}
                                </caption>
                                <thead class="thead">
                                    <tr>
                                        <th>@lang('laravelusers.users-table.id')</th>
                                        <th>{{ __('Owner') }}</th>
                                        <th>{{ __('Buyer') }}</th>
                                        <th class="hidden-xs">{{ __('Gift ID') }}</th>
                                        <th class="hidden-xs">{{ __('Gift Name') }}</th>
                                        <th class="hidden-xs">{{ __('Images') }}</th>
                                        <th class="hidden-sm hidden-xs hidden-md">@lang('laravelusers.users-table.status')</th>
                                        <th class="no-search no-sort">@lang('laravelusers.users-table.actions')</th>
                                        <th class="no-search no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody id="users_table">
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>{{$transaction->id}}</td>
                                            <td>{{$transaction->owner->username}}</td>
                                            <td>{{$transaction->buyer->username}}</td>
                                            <td class="hidden-xs">{{$transaction->gift_id}}</td>
                                            <td class="hidden-xs">{{$transaction->gift->name}}</td>
                                            <td class="hidden-xs"><img src="{{\JD\Cloudder\Facades\Cloudder::show($transaction->gift->images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}"
                                                                       alt="quanganh9x" class="img-fluid" style="height: 50px; width: 50px;"></td>
                                            <td class="hidden-sm hidden-xs hidden-md">{{$transaction->status}}</td>
                                            <td>
                                                {!! Form::open(array('url' => 'manage/transactions/' . $transaction->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => trans('laravelusers.tooltips.delete'))) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::button(trans('laravelusers.buttons.delete'), array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => trans('modals.delete_user_title'), 'data-message' => trans('modals.delete_user_message', ['user' => $transaction->name]))) !!}
                                                {!! Form::close() !!}
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('manage/transactions/' . $transaction->id) }}" data-toggle="tooltip" title="@lang('laravelusers.tooltips.show')">
                                                    {!! trans('laravelusers.buttons.show') !!}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @if(config('laravelusers.enableSearchTransactions'))
                                    <tbody id="search_results"></tbody>
                                @endif
                            </table>

                            @if($pagintaionEnabled)
                                {{ $transactions->links() }}
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
    @if ((count($transactions) > config('laravelusers.datatablesJsStartCount')) && config('laravelusers.enabledDatatablesJs'))
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
