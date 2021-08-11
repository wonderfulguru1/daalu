@extends('layouts.app')

@section('template_title')
    {{ $store->name ?? 'Show Store' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Store</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('stores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Merchant Id:</strong>
                            {{ $store->merchant_id }}
                        </div>
                        <div class="form-group">
                            <strong>Store Name:</strong>
                            {{ $store->store_name }}
                        </div>
                        <div class="form-group">
                            <strong>Store Type Id:</strong>
                            {{ $store->store_type_id }}
                        </div>
                        <div class="form-group">
                            <strong>Website:</strong>
                            {{ $store->website }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $store->image }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $store->address }}
                        </div>
                        <div class="form-group">
                            <strong>State Id:</strong>
                            {{ $store->state_id }}
                        </div>
                        <div class="form-group">
                            <strong>City Id:</strong>
                            {{ $store->city_id }}
                        </div>
                        <div class="form-group">
                            <strong>Zip:</strong>
                            {{ $store->zip }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Person Firstname:</strong>
                            {{ $store->contact_person_firstname }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Person Lastname:</strong>
                            {{ $store->contact_person_lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Job Title:</strong>
                            {{ $store->job_title }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Email:</strong>
                            {{ $store->contact_email }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $store->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile No:</strong>
                            {{ $store->mobile_no }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile No2:</strong>
                            {{ $store->mobile_no2 }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $store->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Daalu Commision:</strong>
                            {{ $store->daalu_commision }}
                        </div>
                        <div class="form-group">
                            <strong>Commission Payout Mode Id:</strong>
                            {{ $store->commission_payout_mode_id }}
                        </div>
                        <div class="form-group">
                            <strong>Daalu Profit:</strong>
                            {{ $store->daalu_profit }}
                        </div>
                        <div class="form-group">
                            <strong>Daalu Constant:</strong>
                            {{ $store->daalu_constant }}
                        </div>
                        <div class="form-group">
                            <strong>Customers Earnings:</strong>
                            {{ $store->customers_earnings }}
                        </div>
                        <div class="form-group">
                            <strong>Timeinterval Id:</strong>
                            {{ $store->timeinterval_id }}
                        </div>
                        <div class="form-group">
                            <strong>Payout Amount Id:</strong>
                            {{ $store->payout_amount_id }}
                        </div>
                        <div class="form-group">
                            <strong>Store Threshold:</strong>
                            {{ $store->store_threshold }}
                        </div>
                        <div class="form-group">
                            <strong>Daalu Threshold:</strong>
                            {{ $store->daalu_threshold }}
                        </div>
                        <div class="form-group">
                            <strong>Store Setting Id:</strong>
                            {{ $store->store_setting_id }}
                        </div>
                        <div class="form-group">
                            <strong>Settings Type:</strong>
                            {{ $store->settings_type }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Id:</strong>
                            {{ $store->payment_id }}
                        </div>
                        <div class="form-group">
                            <strong>Created:</strong>
                            {{ $store->created }}
                        </div>
                        <div class="form-group">
                            <strong>Modified:</strong>
                            {{ $store->modified }}
                        </div>
                        <div class="form-group">
                            <strong>Active:</strong>
                            {{ $store->active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
