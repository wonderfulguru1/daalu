@extends('layouts.app')

@section('template_title')
    {{ $customerTransactionsLog->name ?? 'Show Customer Transactions Log' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Customer Transactions Log</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customer_transactions_log.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ref:</strong>
                            {{ $customerTransactionsLog->ref }}
                        </div>
                        <div class="form-group">
                            <strong>Ref Id:</strong>
                            {{ $customerTransactionsLog->ref_id }}
                        </div>
                        <div class="form-group">
                            <strong>Commission:</strong>
                            {{ $customerTransactionsLog->commission }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Id:</strong>
                            {{ $customerTransactionsLog->customer_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile No:</strong>
                            {{ $customerTransactionsLog->mobile_no }}
                        </div>
                        <div class="form-group">
                            <strong>Card No:</strong>
                            {{ $customerTransactionsLog->card_no }}
                        </div>
                        <div class="form-group">
                            <strong>Amount Spent:</strong>
                            {{ $customerTransactionsLog->amount_spent }}
                        </div>
                        <div class="form-group">
                            <strong>Creds:</strong>
                            {{ $customerTransactionsLog->creds }}
                        </div>
                        <div class="form-group">
                            <strong>Point Deducted:</strong>
                            {{ $customerTransactionsLog->point_deducted }}
                        </div>
                        <div class="form-group">
                            <strong>Transaction:</strong>
                            {{ $customerTransactionsLog->transaction }}
                        </div>
                        <div class="form-group">
                            <strong>Transaction Code:</strong>
                            {{ $customerTransactionsLog->transaction_code }}
                        </div>
                        <div class="form-group">
                            <strong>Ctype:</strong>
                            {{ $customerTransactionsLog->ctype }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $customerTransactionsLog->time }}
                        </div>
                        <div class="form-group">
                            <strong>Merchant Id:</strong>
                            {{ $customerTransactionsLog->merchant_id }}
                        </div>
                        <div class="form-group">
                            <strong>Store Id:</strong>
                            {{ $customerTransactionsLog->store_id }}
                        </div>
                        <div class="form-group">
                            <strong>Entry:</strong>
                            {{ $customerTransactionsLog->entry }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $customerTransactionsLog->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pstatus Id:</strong>
                            {{ $customerTransactionsLog->pstatus_id }}
                        </div>
                        <div class="form-group">
                            <strong>Paid For:</strong>
                            {{ $customerTransactionsLog->paid_for }}
                        </div>
                        <div class="form-group">
                            <strong>Deducted By:</strong>
                            {{ $customerTransactionsLog->deducted_by }}
                        </div>
                        <div class="form-group">
                            <strong>Deducted Date:</strong>
                            {{ $customerTransactionsLog->deducted_date }}
                        </div>
                        <div class="form-group">
                            <strong>Invoice:</strong>
                            {{ $customerTransactionsLog->invoice }}
                        </div>
                        <div class="form-group">
                            <strong>Reason:</strong>
                            {{ $customerTransactionsLog->reason }}
                        </div>
                        <div class="form-group">
                            <strong>Receipt:</strong>
                            {{ $customerTransactionsLog->receipt }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
