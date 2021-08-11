<?php

namespace App\Http\Controllers;

use App\Models\CustomerTransactionsLog;
use Illuminate\Http\Request;

/**
 * Class CustomerTransactionsLogController
 * @package App\Http\Controllers
 */
class CustomerTransactionsLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerTransactionsLogs = CustomerTransactionsLog::paginate();

        return view('customer-transactions-log.index', compact('customerTransactionsLogs'))
            ->with('i', (request()->input('page', 1) - 1) * $customerTransactionsLogs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customerTransactionsLog = new CustomerTransactionsLog();
        return view('customer-transactions-log.create', compact('customerTransactionsLog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CustomerTransactionsLog::$rules);

        $customerTransactionsLog = CustomerTransactionsLog::create($request->all());

        return redirect()->route('customer_transactions_log.index')
            ->with('success', 'CustomerTransactionsLog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customerTransactionsLog = CustomerTransactionsLog::find($id);

        return view('customer-transactions-log.show', compact('customerTransactionsLog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customerTransactionsLog = CustomerTransactionsLog::find($id);

        return view('customer-transactions-log.edit', compact('customerTransactionsLog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CustomerTransactionsLog $customerTransactionsLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerTransactionsLog $customerTransactionsLog)
    {
        request()->validate(CustomerTransactionsLog::$rules);

        $customerTransactionsLog->update($request->all());

        return redirect()->route('customer_transactions_log.index')
            ->with('success', 'CustomerTransactionsLog updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customerTransactionsLog = CustomerTransactionsLog::find($id)->delete();

        return redirect()->route('customer_transactions_log.index')
            ->with('success', 'CustomerTransactionsLog deleted successfully');
    }
}
