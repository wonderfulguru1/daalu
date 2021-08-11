<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('company_school') }}
            {{ Form::text('company_school', $customer->company_school, ['class' => 'form-control' . ($errors->has('company_school') ? ' is-invalid' : ''), 'placeholder' => 'Company School']) }}
            {!! $errors->first('company_school', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('spent') }}
            {{ Form::text('spent', $customer->spent, ['class' => 'form-control' . ($errors->has('spent') ? ' is-invalid' : ''), 'placeholder' => 'Spent']) }}
            {!! $errors->first('spent', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referee_code') }}
            {{ Form::text('referee_code', $customer->referee_code, ['class' => 'form-control' . ($errors->has('referee_code') ? ' is-invalid' : ''), 'placeholder' => 'Referee Code']) }}
            {!! $errors->first('referee_code', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referral_code') }}
            {{ Form::text('referral_code', $customer->referral_code, ['class' => 'form-control' . ($errors->has('referral_code') ? ' is-invalid' : ''), 'placeholder' => 'Referral Code']) }}
            {!! $errors->first('referral_code', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password_isset2') }}
            {{ Form::text('password_isset2', $customer->password_isset2, ['class' => 'form-control' . ($errors->has('password_isset2') ? ' is-invalid' : ''), 'placeholder' => 'Password Isset2']) }}
            {!! $errors->first('password_isset2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fb_id') }}
            {{ Form::text('fb_id', $customer->fb_id, ['class' => 'form-control' . ($errors->has('fb_id') ? ' is-invalid' : ''), 'placeholder' => 'Fb Id']) }}
            {!! $errors->first('fb_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password_isset') }}
            {{ Form::text('password_isset', $customer->password_isset, ['class' => 'form-control' . ($errors->has('password_isset') ? ' is-invalid' : ''), 'placeholder' => 'Password Isset']) }}
            {!! $errors->first('password_isset', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $customer->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $customer->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('card_id') }}
            {{ Form::text('card_id', $customer->card_id, ['class' => 'form-control' . ($errors->has('card_id') ? ' is-invalid' : ''), 'placeholder' => 'Card Id']) }}
            {!! $errors->first('card_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pin') }}
            {{ Form::text('pin', $customer->pin, ['class' => 'form-control' . ($errors->has('pin') ? ' is-invalid' : ''), 'placeholder' => 'Pin']) }}
            {!! $errors->first('pin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('username') }}
            {{ Form::text('username', $customer->username, ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'placeholder' => 'Username']) }}
            {!! $errors->first('username', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile') }}
            {{ Form::text('mobile', $customer->mobile, ['class' => 'form-control' . ($errors->has('mobile') ? ' is-invalid' : ''), 'placeholder' => 'Mobile']) }}
            {!! $errors->first('mobile', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $customer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $customer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('job_title') }}
            {{ Form::text('job_title', $customer->job_title, ['class' => 'form-control' . ($errors->has('job_title') ? ' is-invalid' : ''), 'placeholder' => 'Job Title']) }}
            {!! $errors->first('job_title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('social_id') }}
            {{ Form::text('social_id', $customer->social_id, ['class' => 'form-control' . ($errors->has('social_id') ? ' is-invalid' : ''), 'placeholder' => 'Social Id']) }}
            {!! $errors->first('social_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('institution') }}
            {{ Form::text('institution', $customer->institution, ['class' => 'form-control' . ($errors->has('institution') ? ' is-invalid' : ''), 'placeholder' => 'Institution']) }}
            {!! $errors->first('institution', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dob') }}
            {{ Form::text('dob', $customer->dob, ['class' => 'form-control' . ($errors->has('dob') ? ' is-invalid' : ''), 'placeholder' => 'Dob']) }}
            {!! $errors->first('dob', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender') }}
            {{ Form::text('gender', $customer->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('created') }}
            {{ Form::text('created', $customer->created, ['class' => 'form-control' . ($errors->has('created') ? ' is-invalid' : ''), 'placeholder' => 'Created']) }}
            {!! $errors->first('created', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modified') }}
            {{ Form::text('modified', $customer->modified, ['class' => 'form-control' . ($errors->has('modified') ? ' is-invalid' : ''), 'placeholder' => 'Modified']) }}
            {!! $errors->first('modified', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_active') }}
            {{ Form::text('last_active', $customer->last_active, ['class' => 'form-control' . ($errors->has('last_active') ? ' is-invalid' : ''), 'placeholder' => 'Last Active']) }}
            {!! $errors->first('last_active', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('role_id') }}
            {{ Form::text('role_id', $customer->role_id, ['class' => 'form-control' . ($errors->has('role_id') ? ' is-invalid' : ''), 'placeholder' => 'Role Id']) }}
            {!! $errors->first('role_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::text('image', $customer->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image_fb') }}
            {{ Form::text('image_fb', $customer->image_fb, ['class' => 'form-control' . ($errors->has('image_fb') ? ' is-invalid' : ''), 'placeholder' => 'Image Fb']) }}
            {!! $errors->first('image_fb', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $customer->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city_id') }}
            {{ Form::text('city_id', $customer->city_id, ['class' => 'form-control' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'City Id']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('merchant_id') }}
            {{ Form::text('merchant_id', $customer->merchant_id, ['class' => 'form-control' . ($errors->has('merchant_id') ? ' is-invalid' : ''), 'placeholder' => 'Merchant Id']) }}
            {!! $errors->first('merchant_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('store_id') }}
            {{ Form::text('store_id', $customer->store_id, ['class' => 'form-control' . ($errors->has('store_id') ? ' is-invalid' : ''), 'placeholder' => 'Store Id']) }}
            {!! $errors->first('store_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $customer->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender_id') }}
            {{ Form::text('gender_id', $customer->gender_id, ['class' => 'form-control' . ($errors->has('gender_id') ? ' is-invalid' : ''), 'placeholder' => 'Gender Id']) }}
            {!! $errors->first('gender_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title_id') }}
            {{ Form::text('title_id', $customer->title_id, ['class' => 'form-control' . ($errors->has('title_id') ? ' is-invalid' : ''), 'placeholder' => 'Title Id']) }}
            {!! $errors->first('title_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ip') }}
            {{ Form::text('ip', $customer->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}
            {!! $errors->first('ip', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deliveroption_id') }}
            {{ Form::text('deliveroption_id', $customer->deliveroption_id, ['class' => 'form-control' . ($errors->has('deliveroption_id') ? ' is-invalid' : ''), 'placeholder' => 'Deliveroption Id']) }}
            {!! $errors->first('deliveroption_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('offlinepartner_id') }}
            {{ Form::text('offlinepartner_id', $customer->offlinepartner_id, ['class' => 'form-control' . ($errors->has('offlinepartner_id') ? ' is-invalid' : ''), 'placeholder' => 'Offlinepartner Id']) }}
            {!! $errors->first('offlinepartner_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('employmentstatus_id') }}
            {{ Form::text('employmentstatus_id', $customer->employmentstatus_id, ['class' => 'form-control' . ($errors->has('employmentstatus_id') ? ' is-invalid' : ''), 'placeholder' => 'Employmentstatus Id']) }}
            {!! $errors->first('employmentstatus_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trans_stat_id') }}
            {{ Form::text('trans_stat_id', $customer->trans_stat_id, ['class' => 'form-control' . ($errors->has('trans_stat_id') ? ' is-invalid' : ''), 'placeholder' => 'Trans Stat Id']) }}
            {!! $errors->first('trans_stat_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('passkey') }}
            {{ Form::text('passkey', $customer->passkey, ['class' => 'form-control' . ($errors->has('passkey') ? ' is-invalid' : ''), 'placeholder' => 'Passkey']) }}
            {!! $errors->first('passkey', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sent_mail') }}
            {{ Form::text('sent_mail', $customer->sent_mail, ['class' => 'form-control' . ($errors->has('sent_mail') ? ' is-invalid' : ''), 'placeholder' => 'Sent Mail']) }}
            {!! $errors->first('sent_mail', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_customer') }}
            {{ Form::text('is_customer', $customer->is_customer, ['class' => 'form-control' . ($errors->has('is_customer') ? ' is-invalid' : ''), 'placeholder' => 'Is Customer']) }}
            {!! $errors->first('is_customer', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_test') }}
            {{ Form::text('is_test', $customer->is_test, ['class' => 'form-control' . ($errors->has('is_test') ? ' is-invalid' : ''), 'placeholder' => 'Is Test']) }}
            {!! $errors->first('is_test', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('partner_id') }}
            {{ Form::text('partner_id', $customer->partner_id, ['class' => 'form-control' . ($errors->has('partner_id') ? ' is-invalid' : ''), 'placeholder' => 'Partner Id']) }}
            {!! $errors->first('partner_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_login') }}
            {{ Form::text('last_login', $customer->last_login, ['class' => 'form-control' . ($errors->has('last_login') ? ' is-invalid' : ''), 'placeholder' => 'Last Login']) }}
            {!! $errors->first('last_login', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>