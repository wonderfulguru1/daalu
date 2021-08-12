
@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('content')


<!--Page header-->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Daalu<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="d-flex">
                <div class="header-datepicker mr-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="feather feather-calendar"></i> </div>
                        </div><input class="form-control fc-datepicker hasDatepicker" placeholder="19 Feb 2020" type="text" id="dp1628589469174">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Page header-->
<!--Row-->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Total
                                        Cutomers</span>
                                    <h3 class="mb-0 mt-1 mb-2">{{getCustomerStats()}}</h3> 
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-users"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Total
                                        Merchants</span>
                                    <div class="mt-0 text-left">
                                      <h3 class="mb-0 mt-1 mb-2">{{getMerchantStats()}}</h3> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-box"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Total
                                        Stores</span>
                                    <div class="mt-0 text-left">
                                      <h3 class="mb-0 mt-1 mb-2">{{getStoresStats()}}</h3> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-box"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Total
                                    transactions</span>
                                    <div class="mt-0 text-left">
                                      <h3 class="mb-0 mt-1 mb-2">{{getTransactions()}}</h3> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-box"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!--   Add - chart -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Most Recent Transactions</h3>               
            </div>
            <div class="tab-menu-heading table_tabs mt-2 p-0 ">
                <div class="tabs-menu1">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class="ml-4"><a href="#tab5"  class="active" data-toggle="tab">Earn Transactions</a>
                        </li>
                        <li><a href="#tab6" data-toggle="tab">Burn Transactions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body table_tabs1 p-0 border-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="table-responsive recent_jobs pt-2 pb-2 pl-2 pr-2 card-body">
                            <table class="table mb-0 text-nowrap">
                                <tbody>
                                    @foreach(get10LastTransactions(null, 'earn', null) as $earnTransactions)
                                          <tr class="border-bottom">
                                        <td>
                                            <div class="d-flex"> <img src="assets/images/users/16.jpg" alt="img" class="avatar avatar-md brround mr-3">
                                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                    <h6 class="mb-0">
                                                        {{ $earnTransactions->customer->first_name}}
                                                        {{ $earnTransactions->customer->last_name}}
                                                    </h6>
                                                    <div class="clearfix"></div> <small class="text-muted">{{ $earnTransactions->store->store_name}}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-left fs-13">{{ $earnTransactions->transaction}}</td>
                                        <td class="text-left fs-13"><i class="feather feather-map-pin text-muted mr-2"></i>{{ date('h M Y',$earnTransactions->time)}}
                                        </td>
                                        <td class="text-right"> 
                                            <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="View Transaction"><i
                                                    class="feather feather-eye text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane " id="tab6">
                        <div class="table-responsive recent_jobs pt-2 pb-2 pl-2 pr-2 card-body">
                            <table class="table mb-0 text-nowrap">
                                <tbody>
                                     @foreach(get10LastTransactions(null, 'burn', null) as $burnTransactions)
                                    <tr class="border-bottom">
                                        <td>
                                            <div class="d-flex"> <img src="assets/images/users/16.jpg" alt="img" class="avatar avatar-md brround mr-3">
                                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                    <h6 class="mb-0">
                                                        {{ $burnTransactions->customer->first_name}}
                                                        {{ $burnTransactions->customer->last_name}}
                                                    </h6>
                                                    <div class="clearfix"></div> <small class="text-muted">{{ $burnTransactions->store->store_name}}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-left fs-13">{{ $burnTransactions->transaction}}</td>
                                        <td class="text-left fs-13"><i class="feather feather-map-pin text-muted mr-2"></i>{{ date('h M Y',$earnTransactions->time)}}
                                        </td>
                                        <td class="text-right"> 
                                            <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="View Transaction"><i
                                                    class="feather feather-eye text-danger"></i></a>
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


@endsection