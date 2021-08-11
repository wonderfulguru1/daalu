@extends(themeLayout('layouts.master'))

@section('template_title')
    {{ $customer->name ?? 'Show Customer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.ustomers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Company School:</strong>
                            {{ $customer->company_school }}
                        </div>
                        <div class="form-group">
                            <strong>Spent:</strong>
                            {{ $customer->spent }}
                        </div>
                        <div class="form-group">
                            <strong>Referee Code:</strong>
                            {{ $customer->referee_code }}
                        </div>
                        <div class="form-group">
                            <strong>Referral Code:</strong>
                            {{ $customer->referral_code }}
                        </div>
                        <div class="form-group">
                            <strong>Password Isset2:</strong>
                            {{ $customer->password_isset2 }}
                        </div>
                        <div class="form-group">
                            <strong>Fb Id:</strong>
                            {{ $customer->fb_id }}
                        </div>
                        <div class="form-group">
                            <strong>Password Isset:</strong>
                            {{ $customer->password_isset }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $customer->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $customer->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Card Id:</strong>
                            {{ $customer->card_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pin:</strong>
                            {{ $customer->pin }}
                        </div>
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $customer->username }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile:</strong>
                            {{ $customer->mobile }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $customer->address }}
                        </div>
                        <div class="form-group">
                            <strong>Job Title:</strong>
                            {{ $customer->job_title }}
                        </div>
                        <div class="form-group">
                            <strong>Social Id:</strong>
                            {{ $customer->social_id }}
                        </div>
                        <div class="form-group">
                            <strong>Institution:</strong>
                            {{ $customer->institution }}
                        </div>
                        <div class="form-group">
                            <strong>Dob:</strong>
                            {{ $customer->dob }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $customer->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Created:</strong>
                            {{ $customer->created }}
                        </div>
                        <div class="form-group">
                            <strong>Modified:</strong>
                            {{ $customer->modified }}
                        </div>
                        <div class="form-group">
                            <strong>Last Active:</strong>
                            {{ $customer->last_active }}
                        </div>
                        <div class="form-group">
                            <strong>Role Id:</strong>
                            {{ $customer->role_id }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $customer->image }}
                        </div>
                        <div class="form-group">
                            <strong>Image Fb:</strong>
                            {{ $customer->image_fb }}
                        </div>
                        <div class="form-group">
                            <strong>State Id:</strong>
                            {{ $customer->state_id }}
                        </div>
                        <div class="form-group">
                            <strong>City Id:</strong>
                            {{ $customer->city_id }}
                        </div>
                        <div class="form-group">
                            <strong>Merchant Id:</strong>
                            {{ $customer->merchant_id }}
                        </div>
                        <div class="form-group">
                            <strong>Store Id:</strong>
                            {{ $customer->store_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $customer->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Gender Id:</strong>
                            {{ $customer->gender_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title Id:</strong>
                            {{ $customer->title_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ip:</strong>
                            {{ $customer->ip }}
                        </div>
                        <div class="form-group">
                            <strong>Deliveroption Id:</strong>
                            {{ $customer->deliveroption_id }}
                        </div>
                        <div class="form-group">
                            <strong>Offlinepartner Id:</strong>
                            {{ $customer->offlinepartner_id }}
                        </div>
                        <div class="form-group">
                            <strong>Employmentstatus Id:</strong>
                            {{ $customer->employmentstatus_id }}
                        </div>
                        <div class="form-group">
                            <strong>Trans Stat Id:</strong>
                            {{ $customer->trans_stat_id }}
                        </div>
                        <div class="form-group">
                            <strong>Passkey:</strong>
                            {{ $customer->passkey }}
                        </div>
                        <div class="form-group">
                            <strong>Sent Mail:</strong>
                            {{ $customer->sent_mail }}
                        </div>
                        <div class="form-group">
                            <strong>Is Customer:</strong>
                            {{ $customer->is_customer }}
                        </div>
                        <div class="form-group">
                            <strong>Is Test:</strong>
                            {{ $customer->is_test }}
                        </div>
                        <div class="form-group">
                            <strong>Partner Id:</strong>
                            {{ $customer->partner_id }}
                        </div>
                        <div class="form-group">
                            <strong>Last Login:</strong>
                            {{ $customer->last_login }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
