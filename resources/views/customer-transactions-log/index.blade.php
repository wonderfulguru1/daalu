@extends('layouts.app')

@section('template_title')
    Customer Transactions Log
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Customer Transactions Log') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('customer_transactions_log.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Ref</th>
										<th>Ref Id</th>
										<th>Commission</th>
										<th>Customer Id</th>
										<th>Mobile No</th>
										<th>Card No</th>
										<th>Amount Spent</th>
										<th>Creds</th>
										<th>Point Deducted</th>
										<th>Transaction</th>
										<th>Transaction Code</th>
										<th>Ctype</th>
										<th>Time</th>
										<th>Merchant Id</th>
										<th>Store Id</th>
										<th>Entry</th>
										<th>Status Id</th>
										<th>Pstatus Id</th>
										<th>Paid For</th>
										<th>Deducted By</th>
										<th>Deducted Date</th>
										<th>Invoice</th>
										<th>Reason</th>
										<th>Receipt</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customerTransactionsLogs as $customerTransactionsLog)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $customerTransactionsLog->ref }}</td>
											<td>{{ $customerTransactionsLog->ref_id }}</td>
											<td>{{ $customerTransactionsLog->commission }}</td>
											<td>{{ $customerTransactionsLog->customer_id }}</td>
											<td>{{ $customerTransactionsLog->mobile_no }}</td>
											<td>{{ $customerTransactionsLog->card_no }}</td>
											<td>{{ $customerTransactionsLog->amount_spent }}</td>
											<td>{{ $customerTransactionsLog->creds }}</td>
											<td>{{ $customerTransactionsLog->point_deducted }}</td>
											<td>{{ $customerTransactionsLog->transaction }}</td>
											<td>{{ $customerTransactionsLog->transaction_code }}</td>
											<td>{{ $customerTransactionsLog->ctype }}</td>
											<td>{{ $customerTransactionsLog->time }}</td>
											<td>{{ $customerTransactionsLog->merchant_id }}</td>
											<td>{{ $customerTransactionsLog->store_id }}</td>
											<td>{{ $customerTransactionsLog->entry }}</td>
											<td>{{ $customerTransactionsLog->status_id }}</td>
											<td>{{ $customerTransactionsLog->pstatus_id }}</td>
											<td>{{ $customerTransactionsLog->paid_for }}</td>
											<td>{{ $customerTransactionsLog->deducted_by }}</td>
											<td>{{ $customerTransactionsLog->deducted_date }}</td>
											<td>{{ $customerTransactionsLog->invoice }}</td>
											<td>{{ $customerTransactionsLog->reason }}</td>
											<td>{{ $customerTransactionsLog->receipt }}</td>

                                            <td>
                                                <form action="{{ route('customer_transactions_log.destroy',$customerTransactionsLog->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('customer_transactions_log.show',$customerTransactionsLog->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('customer_transactions_log.edit',$customerTransactionsLog->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $customerTransactionsLogs->links() !!}
            </div>
        </div>
    </div>
@endsection
