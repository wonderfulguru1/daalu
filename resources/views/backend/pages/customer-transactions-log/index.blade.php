@extends(themeLayout('layouts.master'))

@section('template_title')
    Customer
@endsection

@section('content')

 <div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"> Transactions </h4>
    </div>
</div>

     <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left"> <span class="fs-16 font-weight-semibold">Total Transactions</span>
                                    <h3 class="mb-0 mt-1 text-danger  fs-25">{{getTransactions(null, collect(request()->segments())->last(), null)}}</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-danger-transparent my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <a href="task-running.html">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left"> <span class="fs-16 font-weight-semibold">Total Approved Transactions</span>
                                    <h3 class="mb-0 mt-1 text-primary  fs-25">{{getTransactions(null,collect(request()->segments())->last(), 4)}}</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-primary-transparent my-auto  float-right"> <i class="feather feather-clipboard"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <a href="task-hold.html">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left"> <span class="fs-16 font-weight-semibold">Total Pending Transactions</span>
                                    <h3 class="mb-0 mt-1 text-warning  fs-25">{{getTransactions(null,collect(request()->segments())->last(),5)}}</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-secondary-transparent my-auto  float-right"> <i class="feather feather-info"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
              
            </div>
            <div class="card-body">
                <div class="table-responsive company-table">
                    <div id="company-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class=" table-vcenter text-nowrap table-bordered border-bottom dataTable no-footer" role="grid" aria-describedby="company-list_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending" style="width: 225.641px;">Customer Name</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 168.719px;">Card No</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Package: activate to sort column ascending" style="width: 240.641px;">Amount Spent</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Register Date: activate to sort column ascending" style="width: 115.359px;">Points Recieved</th>
                                             <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Register Date: activate to sort column ascending" style="width: 115.359px;">Points Deducted</th>
                                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Register Date: activate to sort column ascending" style="width: 115.359px;">Store of transaction</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 80.9688px;">Transaction Types</th> 
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 80.9688px;">Status</th>
                                            <th class="border-bottom-0 sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 158.781px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customerTransactionsLogs as $customerTransactionsLog)
                                        <tr role="row" class="odd">

                                            <td>{{ $customerTransactionsLog->customer->first_name  }} {{ $customerTransactionsLog->customer->last_name  }}</td>
                                            <td>
                                                {{ ($customerTransactionsLog->card) ? $customerTransactionsLog->card : 'Mobile transaction' }}
                                            </td>
                                            <td>{{ $customerTransactionsLog->amount_spent }}</td>
                                            <td> {{ $customerTransactionsLog->creds }}</span>
                                               
                                            </td>
                                            <td>{{ $customerTransactionsLog->point_deducted }}</td>
                                            <td>{{ $customerTransactionsLog->store->store_name}}</td>

                                            <td> 
                                                {{ $customerTransactionsLog->transaction }}
                                            </td>  
                                            <td> <span class="badge badge-{{$customerTransactionsLog->status->color}}">{{ $customerTransactionsLog->status->status }}</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.transactions.edit',$customerTransactionsLog->id) }}" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"> <i class="feather feather-eye text-primary"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                                   {!! $customerTransactionsLogs->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection
