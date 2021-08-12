@extends(themeLayout('layouts.master'))

@section('template_title')
Update Customer
@endsection

@section('content')

<!--Page header-->
<div class="page-header d-xl-flex d-block">
  <div class="page-leftheader">
    <h4 class="page-title">{{$customer->first_name}} {{$customer->last_name}} Dashboard</h4>
  </div>
</div>
<!--End Page header-->
<!-- Row -->
<div class="row">
  <div class="col-xl-3 col-md-12 col-lg-12">
    <div class="card user-pro-list overflow-hidden">
      <div class="card-body">
        <div class="text-center">
          <div class="widget-user-image mx-auto text-center"> <img class="avatar avatar-xxl brround" alt="img"
              src="assets/images/users/16.jpg"> </div>
          <div class="pro-user mt-3">
            <h5 class="pro-user-username text-dark mb-1 fs-16">{{$customer->first_name}} {{$customer->last_name}}</h5>
            <h6 class="pro-user-desc text-muted fs-12">Customer</h6>
          </div>
        </div>
        <h5 class="mb-2 mt-4 font-weight-semibold">Basic Details</h5>
        <div class="table-responsive">
          <table class="table text-nowrap">
            <tbody>
              <tr>
                <td> <span class="w-50">Email ID</span> </td>
                <td>:</td>
                <td> <span>{{$customer->email}}</span> </td>
              </tr>
              <tr>
                <td> <span class="w-50">Username ID</span> </td>
                <td>:</td>
                <td> <span>{{$customer->username}}</span> </td>
              </tr>
              <tr>
                <td> <span class="w-50">Contact No</span> </td>
                <td>:</td>
                <td> <span>{{$customer->username}}</span> </td>
              </tr>
              <tr>
                <td> <span class="w-50">Gender</span> </td>
                <td>:</td>
                <td> <span>{{$customer->gender}}</span> </td>
              </tr>
              <tr>
                <td> <span class="w-50">Status</span> </td>
                <td>:</td>
                <td> <span class="badge badge-success-{{$customer->status->color}}">{{$customer->status->status}}</span> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-9 col-md-12 col-lg-12">
    <div class="tab-menu-heading hremp-tabs p-0 ">
      <div class="tabs-menu1">
        <!-- Tabs -->
        <ul class="nav panel-tabs">
          <li class="ml-4"><a href="#tab5" class="active" data-toggle="tab">Overview</a></li>
          <li><a href="#tab7" data-toggle="tab" class="">Earn Transaction</a></li>
          <li><a href="#tab8" data-toggle="tab" class="">Burn Transactions</a></li>
      </div>
    </div>
    <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
      <div class="tab-content">
        <div class="tab-pane active" id="tab5">
          <div class="card-body">           
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="card mb-xl-0 box-shadow-0 bg-primary-transparent">
                  <div class="card-body text-center">
                    <p class="mb-1">Point Balance</p>
                    <h3 class="mb-0">{{$customer->transStat->customer_balance}}</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="card mb-xl-0 box-shadow-0 text-center  bg-secondary-transparent">
                  <div class="card-body text-center">
                    <p class=" mb-1">Total Transactions</p>
                    <h3 class="mb-1">{{customerTransactionsLog($customer->id)->count()}}</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="card mb-xl-0 box-shadow-0 text-center  bg-success-transparent">
                  <div class="card-body text-center">
                    <p class=" mb-1">Total Earn Transactions</p>
                    <h3 class="mb-1">{{customerTransactionsLog($customer->id, 'earn')->count()}}</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="card mb-xl-0 box-shadow-0 text-center  bg-danger-transparent">
                  <div class="card-body text-center">
                    <p class=" mb-1">Total Burn Transactions</p>
                    <h3 class="mb-1">{{customerTransactionsLog($customer->id,'burn')->count()}}</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <form method="POST" class="col-md-12" action="{{ route('admin.customers.update', $customer->id) }}"  role="form" enctype="multipart/form-data">
                  {{ method_field('PATCH') }}
                  @csrf
                  @include(theme('customer.form'))
              </form>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab7">
          <div class="card-body">
            <div class="table-responsive"> 
              <div id="task-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
               
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-vcenter text-nowrap table-bordered border-bottom dataTable no-footer"
                      id="task-list" role="grid" aria-describedby="task-list_info">
                      <thead>
                        <tr role="row">
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Task: activate to sort column ascending" style="width: 0px;">Merchant
                          </th>
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Client: activate to sort column ascending" style="width: 0px;">
                            Store</th>
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Assign To: activate to sort column ascending" style="width: 0px;">
                            Amount Spent</th>
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Priority: activate to sort column ascending" style="width: 0px;">
                           Point Earn</th>
                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Start Date: activate to sort column ascending" style="width: 0px;">
                           Transaction Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(customerTransactionsLog($customer->id, 'burn'))
                          @foreach(customerTransactionsLog($customer->id, 'earn') as $transaction)
                          <tr role="row" class="odd">
                            <td>
                              <a href="#" class="d-flex sidebarmodal-collpase"> <span>{{$transaction->merchant->merchant_name}}</span>
                              </a>
                            </td>
                            <td> <a href="#" class="font-weight-semibold">{{$transaction->store->store_name}}</a> </td>
                            <td><span class="badge badge-danger-light">{{$transaction->amount_spent}}</span></td>
                            <td><span class="badge badge-danger-light">{{$transaction->creds}}</span></td>
                            <td>{{date('h M Y',$transaction->time)}}</td>                           
                          </tr>
                          @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab8">
          <div class="card-body">
            <div class="table-responsive"> 
              <div id="invoice-tables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-vcenter text-nowrap table-bordered border-bottom dataTable no-footer"
                      id="invoice-tables" role="grid" aria-describedby="invoice-tables_info">
                       <thead>
                        <tr role="row">
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Task: activate to sort column ascending" style="width: 0px;">Merchant
                          </th>
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Client: activate to sort column ascending" style="width: 0px;">
                            Store</th>
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Assign To: activate to sort column ascending" style="width: 0px;">
                            Amount Spent</th>
                          <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Priority: activate to sort column ascending" style="width: 0px;">
                           Point Deducted</th>
                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1"
                            colspan="1" aria-label="Start Date: activate to sort column ascending" style="width: 0px;">
                           Transaction Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(customerTransactionsLog($customer->id, 'burn'))
                           @foreach(customerTransactionsLog($customer->id, 'burn') as $transaction)
                          <tr role="row" class="odd">
                            <td>
                              <a href="#" class="d-flex sidebarmodal-collpase"> <span>{{$transaction->merchant->merchant_name}}</span>
                              </a>
                            </td>
                            <td> <a href="#" class="font-weight-semibold">{{$transaction->store->store_name}}</a> </td>
                            <td><span class="badge badge-danger-light">{{$transaction->amount_spent}}</span></td>
                            <td><span class="badge badge-danger-light">{{$transaction->creds}}</span></td>
                            <td>{{date('h M Y',$transaction->time)}}</td>                           
                          </tr>
                          @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Row-->

@endsection