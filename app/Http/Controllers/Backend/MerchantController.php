<?php


namespace App\Http\Controllers\Backend;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * Class MerchantController
 * @package App\Http\Controllers
 */
class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchants = Merchant::all();

        return view(theme('merchant.index'), compact('merchants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merchant = new Merchant();
        return view(theme('merchant.create'), compact('merchant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Merchant::$rules);

        $merchant = Merchant::create($request->all());

        return redirect()->route('merchants.index')
            ->with('success', 'Merchant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merchant = Merchant::find($id);

        return view(theme('merchant.show'), compact('merchant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merchant = Merchant::find($id);

        return view(theme('merchant.edit'), compact('merchant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Merchant $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchant $merchant)
    {
        request()->validate(Merchant::$rules);

        $merchant->update($request->all());

        return redirect()->route('merchants.index')
            ->with('success', 'Merchant updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $merchant = Merchant::find($id)->delete();

        return redirect()->route('merchants.index')
            ->with('success', 'Merchant deleted successfully');
    }
}
