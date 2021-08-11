<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contact_first_name') }}
            {{ Form::text('contact_first_name', $merchant->contact_first_name, ['class' => 'form-control' . ($errors->has('contact_first_name') ? ' is-invalid' : ''), 'placeholder' => 'Contact First Name']) }}
            {!! $errors->first('contact_first_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_last_name') }}
            {{ Form::text('contact_last_name', $merchant->contact_last_name, ['class' => 'form-control' . ($errors->has('contact_last_name') ? ' is-invalid' : ''), 'placeholder' => 'Contact Last Name']) }}
            {!! $errors->first('contact_last_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('job_title') }}
            {{ Form::text('job_title', $merchant->job_title, ['class' => 'form-control' . ($errors->has('job_title') ? ' is-invalid' : ''), 'placeholder' => 'Job Title']) }}
            {!! $errors->first('job_title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile') }}
            {{ Form::text('mobile', $merchant->mobile, ['class' => 'form-control' . ($errors->has('mobile') ? ' is-invalid' : ''), 'placeholder' => 'Mobile']) }}
            {!! $errors->first('mobile', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $merchant->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_email') }}
            {{ Form::text('contact_email', $merchant->contact_email, ['class' => 'form-control' . ($errors->has('contact_email') ? ' is-invalid' : ''), 'placeholder' => 'Contact Email']) }}
            {!! $errors->first('contact_email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_phone') }}
            {{ Form::text('contact_phone', $merchant->contact_phone, ['class' => 'form-control' . ($errors->has('contact_phone') ? ' is-invalid' : ''), 'placeholder' => 'Contact Phone']) }}
            {!! $errors->first('contact_phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_altphone') }}
            {{ Form::text('contact_altphone', $merchant->contact_altphone, ['class' => 'form-control' . ($errors->has('contact_altphone') ? ' is-invalid' : ''), 'placeholder' => 'Contact Altphone']) }}
            {!! $errors->first('contact_altphone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('daalu_commision') }}
            {{ Form::text('daalu_commision', $merchant->daalu_commision, ['class' => 'form-control' . ($errors->has('daalu_commision') ? ' is-invalid' : ''), 'placeholder' => 'Daalu Commision']) }}
            {!! $errors->first('daalu_commision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('zip') }}
            {{ Form::text('zip', $merchant->zip, ['class' => 'form-control' . ($errors->has('zip') ? ' is-invalid' : ''), 'placeholder' => 'Zip']) }}
            {!! $errors->first('zip', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $merchant->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city_id') }}
            {{ Form::text('city_id', $merchant->city_id, ['class' => 'form-control' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'City Id']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $merchant->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::text('image', $merchant->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('points') }}
            {{ Form::text('points', $merchant->points, ['class' => 'form-control' . ($errors->has('points') ? ' is-invalid' : ''), 'placeholder' => 'Points']) }}
            {!! $errors->first('points', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('merchant_name') }}
            {{ Form::text('merchant_name', $merchant->merchant_name, ['class' => 'form-control' . ($errors->has('merchant_name') ? ' is-invalid' : ''), 'placeholder' => 'Merchant Name']) }}
            {!! $errors->first('merchant_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $merchant->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_percentage') }}
            {{ Form::text('customer_percentage', $merchant->customer_percentage, ['class' => 'form-control' . ($errors->has('customer_percentage') ? ' is-invalid' : ''), 'placeholder' => 'Customer Percentage']) }}
            {!! $errors->first('customer_percentage', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('created') }}
            {{ Form::text('created', $merchant->created, ['class' => 'form-control' . ($errors->has('created') ? ' is-invalid' : ''), 'placeholder' => 'Created']) }}
            {!! $errors->first('created', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modified') }}
            {{ Form::text('modified', $merchant->modified, ['class' => 'form-control' . ($errors->has('modified') ? ' is-invalid' : ''), 'placeholder' => 'Modified']) }}
            {!! $errors->first('modified', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $merchant->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>