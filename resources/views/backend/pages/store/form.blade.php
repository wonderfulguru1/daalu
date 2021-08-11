<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('merchant_id') }}
            {{ Form::text('merchant_id', $store->merchant_id, ['class' => 'form-control' . ($errors->has('merchant_id') ? ' is-invalid' : ''), 'placeholder' => 'Merchant Id']) }}
            {!! $errors->first('merchant_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('store_name') }}
            {{ Form::text('store_name', $store->store_name, ['class' => 'form-control' . ($errors->has('store_name') ? ' is-invalid' : ''), 'placeholder' => 'Store Name']) }}
            {!! $errors->first('store_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('store_type_id') }}
            {{ Form::text('store_type_id', $store->store_type_id, ['class' => 'form-control' . ($errors->has('store_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Store Type Id']) }}
            {!! $errors->first('store_type_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('website') }}
            {{ Form::text('website', $store->website, ['class' => 'form-control' . ($errors->has('website') ? ' is-invalid' : ''), 'placeholder' => 'Website']) }}
            {!! $errors->first('website', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::text('image', $store->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $store->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $store->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city_id') }}
            {{ Form::text('city_id', $store->city_id, ['class' => 'form-control' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'City Id']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('zip') }}
            {{ Form::text('zip', $store->zip, ['class' => 'form-control' . ($errors->has('zip') ? ' is-invalid' : ''), 'placeholder' => 'Zip']) }}
            {!! $errors->first('zip', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_person_firstname') }}
            {{ Form::text('contact_person_firstname', $store->contact_person_firstname, ['class' => 'form-control' . ($errors->has('contact_person_firstname') ? ' is-invalid' : ''), 'placeholder' => 'Contact Person Firstname']) }}
            {!! $errors->first('contact_person_firstname', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_person_lastname') }}
            {{ Form::text('contact_person_lastname', $store->contact_person_lastname, ['class' => 'form-control' . ($errors->has('contact_person_lastname') ? ' is-invalid' : ''), 'placeholder' => 'Contact Person Lastname']) }}
            {!! $errors->first('contact_person_lastname', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('job_title') }}
            {{ Form::text('job_title', $store->job_title, ['class' => 'form-control' . ($errors->has('job_title') ? ' is-invalid' : ''), 'placeholder' => 'Job Title']) }}
            {!! $errors->first('job_title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_email') }}
            {{ Form::text('contact_email', $store->contact_email, ['class' => 'form-control' . ($errors->has('contact_email') ? ' is-invalid' : ''), 'placeholder' => 'Contact Email']) }}
            {!! $errors->first('contact_email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $store->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile_no') }}
            {{ Form::text('mobile_no', $store->mobile_no, ['class' => 'form-control' . ($errors->has('mobile_no') ? ' is-invalid' : ''), 'placeholder' => 'Mobile No']) }}
            {!! $errors->first('mobile_no', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile_no2') }}
            {{ Form::text('mobile_no2', $store->mobile_no2, ['class' => 'form-control' . ($errors->has('mobile_no2') ? ' is-invalid' : ''), 'placeholder' => 'Mobile No2']) }}
            {!! $errors->first('mobile_no2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $store->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('daalu_commision') }}
            {{ Form::text('daalu_commision', $store->daalu_commision, ['class' => 'form-control' . ($errors->has('daalu_commision') ? ' is-invalid' : ''), 'placeholder' => 'Daalu Commision']) }}
            {!! $errors->first('daalu_commision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('commission_payout_mode_id') }}
            {{ Form::text('commission_payout_mode_id', $store->commission_payout_mode_id, ['class' => 'form-control' . ($errors->has('commission_payout_mode_id') ? ' is-invalid' : ''), 'placeholder' => 'Commission Payout Mode Id']) }}
            {!! $errors->first('commission_payout_mode_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('daalu_profit') }}
            {{ Form::text('daalu_profit', $store->daalu_profit, ['class' => 'form-control' . ($errors->has('daalu_profit') ? ' is-invalid' : ''), 'placeholder' => 'Daalu Profit']) }}
            {!! $errors->first('daalu_profit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('daalu_constant') }}
            {{ Form::text('daalu_constant', $store->daalu_constant, ['class' => 'form-control' . ($errors->has('daalu_constant') ? ' is-invalid' : ''), 'placeholder' => 'Daalu Constant']) }}
            {!! $errors->first('daalu_constant', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customers_earnings') }}
            {{ Form::text('customers_earnings', $store->customers_earnings, ['class' => 'form-control' . ($errors->has('customers_earnings') ? ' is-invalid' : ''), 'placeholder' => 'Customers Earnings']) }}
            {!! $errors->first('customers_earnings', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('timeinterval_id') }}
            {{ Form::text('timeinterval_id', $store->timeinterval_id, ['class' => 'form-control' . ($errors->has('timeinterval_id') ? ' is-invalid' : ''), 'placeholder' => 'Timeinterval Id']) }}
            {!! $errors->first('timeinterval_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payout_amount_id') }}
            {{ Form::text('payout_amount_id', $store->payout_amount_id, ['class' => 'form-control' . ($errors->has('payout_amount_id') ? ' is-invalid' : ''), 'placeholder' => 'Payout Amount Id']) }}
            {!! $errors->first('payout_amount_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('store_threshold') }}
            {{ Form::text('store_threshold', $store->store_threshold, ['class' => 'form-control' . ($errors->has('store_threshold') ? ' is-invalid' : ''), 'placeholder' => 'Store Threshold']) }}
            {!! $errors->first('store_threshold', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('daalu_threshold') }}
            {{ Form::text('daalu_threshold', $store->daalu_threshold, ['class' => 'form-control' . ($errors->has('daalu_threshold') ? ' is-invalid' : ''), 'placeholder' => 'Daalu Threshold']) }}
            {!! $errors->first('daalu_threshold', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('store_setting_id') }}
            {{ Form::text('store_setting_id', $store->store_setting_id, ['class' => 'form-control' . ($errors->has('store_setting_id') ? ' is-invalid' : ''), 'placeholder' => 'Store Setting Id']) }}
            {!! $errors->first('store_setting_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('settings_type') }}
            {{ Form::text('settings_type', $store->settings_type, ['class' => 'form-control' . ($errors->has('settings_type') ? ' is-invalid' : ''), 'placeholder' => 'Settings Type']) }}
            {!! $errors->first('settings_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_id') }}
            {{ Form::text('payment_id', $store->payment_id, ['class' => 'form-control' . ($errors->has('payment_id') ? ' is-invalid' : ''), 'placeholder' => 'Payment Id']) }}
            {!! $errors->first('payment_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('created') }}
            {{ Form::text('created', $store->created, ['class' => 'form-control' . ($errors->has('created') ? ' is-invalid' : ''), 'placeholder' => 'Created']) }}
            {!! $errors->first('created', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modified') }}
            {{ Form::text('modified', $store->modified, ['class' => 'form-control' . ($errors->has('modified') ? ' is-invalid' : ''), 'placeholder' => 'Modified']) }}
            {!! $errors->first('modified', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active') }}
            {{ Form::text('active', $store->active, ['class' => 'form-control' . ($errors->has('active') ? ' is-invalid' : ''), 'placeholder' => 'Active']) }}
            {!! $errors->first('active', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>