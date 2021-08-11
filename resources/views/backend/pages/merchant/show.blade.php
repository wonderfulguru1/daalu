@extends('layouts.app')

@section('template_title')
    {{ $merchant->name ?? 'Show Merchant' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Merchant</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('merchants.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contact First Name:</strong>
                            {{ $merchant->contact_first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Last Name:</strong>
                            {{ $merchant->contact_last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Job Title:</strong>
                            {{ $merchant->job_title }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile:</strong>
                            {{ $merchant->mobile }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $merchant->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Email:</strong>
                            {{ $merchant->contact_email }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Phone:</strong>
                            {{ $merchant->contact_phone }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Altphone:</strong>
                            {{ $merchant->contact_altphone }}
                        </div>
                        <div class="form-group">
                            <strong>Daalu Commision:</strong>
                            {{ $merchant->daalu_commision }}
                        </div>
                        <div class="form-group">
                            <strong>Zip:</strong>
                            {{ $merchant->zip }}
                        </div>
                        <div class="form-group">
                            <strong>State Id:</strong>
                            {{ $merchant->state_id }}
                        </div>
                        <div class="form-group">
                            <strong>City Id:</strong>
                            {{ $merchant->city_id }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $merchant->url }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $merchant->image }}
                        </div>
                        <div class="form-group">
                            <strong>Points:</strong>
                            {{ $merchant->points }}
                        </div>
                        <div class="form-group">
                            <strong>Merchant Name:</strong>
                            {{ $merchant->merchant_name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $merchant->address }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Percentage:</strong>
                            {{ $merchant->customer_percentage }}
                        </div>
                        <div class="form-group">
                            <strong>Created:</strong>
                            {{ $merchant->created }}
                        </div>
                        <div class="form-group">
                            <strong>Modified:</strong>
                            {{ $merchant->modified }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $merchant->status_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
