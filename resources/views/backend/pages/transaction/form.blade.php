<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('credit') }}
            {{ Form::text('credit', $transaction->credit, ['class' => 'form-control' . ($errors->has('credit') ? ' is-invalid' : ''), 'placeholder' => 'Credit']) }}
            {!! $errors->first('credit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('debit') }}
            {{ Form::text('debit', $transaction->debit, ['class' => 'form-control' . ($errors->has('debit') ? ' is-invalid' : ''), 'placeholder' => 'Debit']) }}
            {!! $errors->first('debit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prev_bal') }}
            {{ Form::text('prev_bal', $transaction->prev_bal, ['class' => 'form-control' . ($errors->has('prev_bal') ? ' is-invalid' : ''), 'placeholder' => 'Prev Bal']) }}
            {!! $errors->first('prev_bal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_id') }}
            {{ Form::text('customer_id', $transaction->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), 'placeholder' => 'Customer Id']) }}
            {!! $errors->first('customer_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_transactions_log_id') }}
            {{ Form::text('customer_transactions_log_id', $transaction->customer_transactions_log_id, ['class' => 'form-control' . ($errors->has('customer_transactions_log_id') ? ' is-invalid' : ''), 'placeholder' => 'Customer Transactions Log Id']) }}
            {!! $errors->first('customer_transactions_log_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>