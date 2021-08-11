<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ref') }}
            {{ Form::text('ref', $customerTransactionsLog->ref, ['class' => 'form-control' . ($errors->has('ref') ? ' is-invalid' : ''), 'placeholder' => 'Ref']) }}
            {!! $errors->first('ref', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ref_id') }}
            {{ Form::text('ref_id', $customerTransactionsLog->ref_id, ['class' => 'form-control' . ($errors->has('ref_id') ? ' is-invalid' : ''), 'placeholder' => 'Ref Id']) }}
            {!! $errors->first('ref_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('commission') }}
            {{ Form::text('commission', $customerTransactionsLog->commission, ['class' => 'form-control' . ($errors->has('commission') ? ' is-invalid' : ''), 'placeholder' => 'Commission']) }}
            {!! $errors->first('commission', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_id') }}
            {{ Form::text('customer_id', $customerTransactionsLog->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), 'placeholder' => 'Customer Id']) }}
            {!! $errors->first('customer_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile_no') }}
            {{ Form::text('mobile_no', $customerTransactionsLog->mobile_no, ['class' => 'form-control' . ($errors->has('mobile_no') ? ' is-invalid' : ''), 'placeholder' => 'Mobile No']) }}
            {!! $errors->first('mobile_no', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('card_no') }}
            {{ Form::text('card_no', $customerTransactionsLog->card_no, ['class' => 'form-control' . ($errors->has('card_no') ? ' is-invalid' : ''), 'placeholder' => 'Card No']) }}
            {!! $errors->first('card_no', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amount_spent') }}
            {{ Form::text('amount_spent', $customerTransactionsLog->amount_spent, ['class' => 'form-control' . ($errors->has('amount_spent') ? ' is-invalid' : ''), 'placeholder' => 'Amount Spent']) }}
            {!! $errors->first('amount_spent', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('creds') }}
            {{ Form::text('creds', $customerTransactionsLog->creds, ['class' => 'form-control' . ($errors->has('creds') ? ' is-invalid' : ''), 'placeholder' => 'Creds']) }}
            {!! $errors->first('creds', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('point_deducted') }}
            {{ Form::text('point_deducted', $customerTransactionsLog->point_deducted, ['class' => 'form-control' . ($errors->has('point_deducted') ? ' is-invalid' : ''), 'placeholder' => 'Point Deducted']) }}
            {!! $errors->first('point_deducted', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transaction') }}
            {{ Form::text('transaction', $customerTransactionsLog->transaction, ['class' => 'form-control' . ($errors->has('transaction') ? ' is-invalid' : ''), 'placeholder' => 'Transaction']) }}
            {!! $errors->first('transaction', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transaction_code') }}
            {{ Form::text('transaction_code', $customerTransactionsLog->transaction_code, ['class' => 'form-control' . ($errors->has('transaction_code') ? ' is-invalid' : ''), 'placeholder' => 'Transaction Code']) }}
            {!! $errors->first('transaction_code', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ctype') }}
            {{ Form::text('ctype', $customerTransactionsLog->ctype, ['class' => 'form-control' . ($errors->has('ctype') ? ' is-invalid' : ''), 'placeholder' => 'Ctype']) }}
            {!! $errors->first('ctype', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time') }}
            {{ Form::text('time', $customerTransactionsLog->time, ['class' => 'form-control' . ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('time', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('merchant_id') }}
            {{ Form::text('merchant_id', $customerTransactionsLog->merchant_id, ['class' => 'form-control' . ($errors->has('merchant_id') ? ' is-invalid' : ''), 'placeholder' => 'Merchant Id']) }}
            {!! $errors->first('merchant_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('store_id') }}
            {{ Form::text('store_id', $customerTransactionsLog->store_id, ['class' => 'form-control' . ($errors->has('store_id') ? ' is-invalid' : ''), 'placeholder' => 'Store Id']) }}
            {!! $errors->first('store_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entry') }}
            {{ Form::text('entry', $customerTransactionsLog->entry, ['class' => 'form-control' . ($errors->has('entry') ? ' is-invalid' : ''), 'placeholder' => 'Entry']) }}
            {!! $errors->first('entry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $customerTransactionsLog->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pstatus_id') }}
            {{ Form::text('pstatus_id', $customerTransactionsLog->pstatus_id, ['class' => 'form-control' . ($errors->has('pstatus_id') ? ' is-invalid' : ''), 'placeholder' => 'Pstatus Id']) }}
            {!! $errors->first('pstatus_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paid_for') }}
            {{ Form::text('paid_for', $customerTransactionsLog->paid_for, ['class' => 'form-control' . ($errors->has('paid_for') ? ' is-invalid' : ''), 'placeholder' => 'Paid For']) }}
            {!! $errors->first('paid_for', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deducted_by') }}
            {{ Form::text('deducted_by', $customerTransactionsLog->deducted_by, ['class' => 'form-control' . ($errors->has('deducted_by') ? ' is-invalid' : ''), 'placeholder' => 'Deducted By']) }}
            {!! $errors->first('deducted_by', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deducted_date') }}
            {{ Form::text('deducted_date', $customerTransactionsLog->deducted_date, ['class' => 'form-control' . ($errors->has('deducted_date') ? ' is-invalid' : ''), 'placeholder' => 'Deducted Date']) }}
            {!! $errors->first('deducted_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('invoice') }}
            {{ Form::text('invoice', $customerTransactionsLog->invoice, ['class' => 'form-control' . ($errors->has('invoice') ? ' is-invalid' : ''), 'placeholder' => 'Invoice']) }}
            {!! $errors->first('invoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reason') }}
            {{ Form::text('reason', $customerTransactionsLog->reason, ['class' => 'form-control' . ($errors->has('reason') ? ' is-invalid' : ''), 'placeholder' => 'Reason']) }}
            {!! $errors->first('reason', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('receipt') }}
            {{ Form::text('receipt', $customerTransactionsLog->receipt, ['class' => 'form-control' . ($errors->has('receipt') ? ' is-invalid' : ''), 'placeholder' => 'Receipt']) }}
            {!! $errors->first('receipt', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>