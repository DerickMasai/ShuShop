<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Billing;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'Billing • Checkout';
        return view('checkout.billing', ['page' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $zip_code = $request->input('zip_code');
        $phone_number = $request->input('phone_number');
        if (strlen($phone_number) > 8 && is_numeric($zip_code)) {
            // Remove whitespaces
            $phone_number = str_replace(' ', '', $phone_number);

            $info = Billing::where('id', '=', $id)
            ->update([
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'zip_code' => $request->input('zip_code'),
                'region' => $request->input('region'),
                'city' => $request->input('city'),
                'organization' => $request->input('organization')
            ]);
        }
        
        return redirect('/checkout/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
