@extends('layouts.app')

@section('template_title')
    {{ $transaction->name ?? 'Show Transaction' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Transaction</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Credit:</strong>
                            {{ $transaction->credit }}
                        </div>
                        <div class="form-group">
                            <strong>Debit:</strong>
                            {{ $transaction->debit }}
                        </div>
                        <div class="form-group">
                            <strong>Prev Bal:</strong>
                            {{ $transaction->prev_bal }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Id:</strong>
                            {{ $transaction->customer_id }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Transactions Log Id:</strong>
                            {{ $transaction->customer_transactions_log_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
