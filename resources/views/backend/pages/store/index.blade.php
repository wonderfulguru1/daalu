@extends(themeLayout('layouts.master'))

@section('template_title')
    Customer
@endsection

@section('content')

 <div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">All Stores</h4>
    </div>
    <div class="page-rightheader ml-md-auto hidden">
        <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list"> <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#newcompanymodal"><i
                        class="feather feather-plus fs-15 my-auto mr-2"></i>Add New Store</a>
              
               
            </div>
        </div>
    </div>
</div>

   <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <a href="task-list.html">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left"> <span class="fs-16 font-weight-semibold">Total Stores</span>
                                    <h3 class="mb-0 mt-1 text-danger  fs-25">{{getStoresStats()}}</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-danger-transparent my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <a href="task-running.html">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left"> <span class="fs-16 font-weight-semibold">Total Active Store(s)</span>
                                    <h3 class="mb-0 mt-1 text-primary  fs-25">{{getStoresStats(1)}}</h3>
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
                <a href="task-running.html">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left"> <span class="fs-16 font-weight-semibold">Total In Active Store(s)</span>
                                    <h3 class="mb-0 mt-1 text-primary  fs-25">{{getStoresStats(2)}}</h3>
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
    </div>

 <div class="row">
    <div class="col-md-12">
        <div class="card">            
            <div class="card-body">
                <div class="table-responsive company-table">
                    <div id="company-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="company-list">
                                    <thead>
                                        <tr role="row">
                                            <th class="border-bottom-0 w-5 sorting_disabled" rowspan="1" colspan="1" aria-label="#NO" style="width: 27.8906px;">#NO</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Company Name: activate to sort column ascending" style="width: 225.641px;">Merchant Name</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 168.719px;">Merchant Contact</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Package: activate to sort column ascending" style="width: 240.641px;">Contact mobile</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Register Date: activate to sort column ascending" style="width: 115.359px;">Register Date</th>
                                            <th class="border-bottom-0 sorting" tabindex="0" aria-controls="company-list" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 80.9688px;">Status</th>
                                            <th class="border-bottom-0 sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 158.781px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($stores as $store)
                                        <tr role="row" class="odd">

                                            <td>{{ $store->merchant->merchant_name }}</td>
                                            <td>
                                                <a href="#" class="d-flex sidebarmodal-collpase"> <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(../../assets/images/files/company/img1.png)"></span>
                                                    <div class="mt-0 mt-sm-4 d-block">
                                                        <h6 class="mb-0 fs-16">{{ $store->store_name }} </h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>{{ $store->contact_first_name }} {{ $store->contact_last_name }}</td>
                                            <td> <span class="fs-13"> {{ ($store->mobile) ? $store->mobile : '-' }}</span>
                                               
                                            </td>
                                            <td>{{ date('h M Y', strtotime($store->created)) }}</td>

                                            <td> <span class="badge badge-{{$store->status->color}}">{{$store->status->status}}</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.stores.edit',$store->id) }}" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"> <i class="feather feather-eye text-primary"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                      @endforeach
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
  
@endsection

