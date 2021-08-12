<div class="box box-info padding-1 card">
    <div class="box-body row card-body">
       
        <div class="form-group col-md-6">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $customer->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $customer->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('username') }}
            {{ Form::text('username', $customer->username, ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'placeholder' => 'Username']) }}
            {!! $errors->first('username', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('mobile') }}
            {{ Form::text('mobile', $customer->mobile, ['class' => 'form-control' . ($errors->has('mobile') ? ' is-invalid' : ''), 'placeholder' => 'Mobile']) }}
            {!! $errors->first('mobile', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('email') }}
            {{ Form::text('email', $customer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group col-md-6">
            {{ Form::label('job_title') }}
            {{ Form::text('job_title', $customer->job_title, ['class' => 'form-control' . ($errors->has('job_title') ? ' is-invalid' : ''), 'placeholder' => 'Job Title']) }}
            {!! $errors->first('job_title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('address') }}
            {{ Form::text('address', $customer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
          
        <div class="form-group col-md-6">
            {{ Form::label('pin') }}
            {{ Form::text('pin', '', ['class' => 'form-control' . ($errors->has('pin') ? ' is-invalid' : ''), 'placeholder' => 'Pin']) }}
            {!! $errors->first('pin', '<div class="invalid-feedback">:message</p>') !!}
        </div>  
        <div class="form-group col-md-6">
            {{ Form::label('dob') }}
            {{ Form::text('dob', $customer->dob, ['class' => 'form-control' . ($errors->has('dob') ? ' is-invalid' : ''), 'placeholder' => 'Dob']) }}
            {!! $errors->first('dob', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('gender') }}
            {{ Form::text('gender', $customer->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $customer->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('city_id') }}
            {{ Form::text('city_id', $customer->city_id, ['class' => 'form-control' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'City Id']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('gender_id') }}
            {{ Form::text('gender_id', $customer->gender_id, ['class' => 'form-control' . ($errors->has('gender_id') ? ' is-invalid' : ''), 'placeholder' => 'Gender Id']) }}
            {!! $errors->first('gender_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('title_id') }}
            {{ Form::text('title_id', $customer->title_id, ['class' => 'form-control' . ($errors->has('title_id') ? ' is-invalid' : ''), 'placeholder' => 'Title Id']) }}
            {!! $errors->first('title_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('employmentstatus_id') }}
            {{ Form::text('employmentstatus_id', $customer->employmentstatus_id, ['class' => 'form-control' . ($errors->has('employmentstatus_id') ? ' is-invalid' : ''), 'placeholder' => 'Employmentstatus Id']) }}
            {!! $errors->first('employmentstatus_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>