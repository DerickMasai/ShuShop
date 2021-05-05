<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use DB;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tempArray = array();
        foreach (Cart::content() as $single) {
            array_push($tempArray, $single->id);
        }

        $rowIdsArray = array();
        foreach (Cart::content() as $single) {
            array_push($rowIdsArray, $single->rowId);
        }

        $itemsInCart = collect();
        for ($i=0; $i < count($tempArray); $i++) {
            $item = DB::table('shoes')
            ->where('id', '=', $tempArray[$i])
            ->get();
            $itemsInCart->push($item[0]);
        }

        $subtotal = 0;
        for ($i=0; $i < $itemsInCart->count(); $i++) { 
            $subtotal += $itemsInCart[$i]->primary_price;
        }

        $page = 'Payment • Checkout';

        $i = 0;

        if (Cart::count() > 0) {
            return view('checkout.payment', ['page' => $page, 'itemsInCart' => $itemsInCart, 'subtotal' => $subtotal, 'i' => $i]);
        } else {
            return redirect('/');
        }
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
        // Get Total Amount
        $tempArray = array();
        foreach (Cart::content() as $single) {
            array_push($tempArray, $single->id);
        }
        $rowIdsArray = array();
        foreach (Cart::content() as $single) {
            array_push($rowIdsArray, $single->rowId);
        }
        $itemsInCart = collect();
        for ($i=0; $i < count($tempArray); $i++) {
            $item = DB::table('shoes')
            ->where('id', '=', $tempArray[$i])
            ->get();
            $itemsInCart->push($item[0]);
        }
        $subtotal = 0;
        for ($i=0; $i < $itemsInCart->count(); $i++) { 
            $subtotal += $itemsInCart[$i]->primary_price;
        }


        if (!empty($request->transaction_id)) {
            $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $refNumber = rand(10000, 99999);

            DB::table('transactions')->insert([
                'transaction_code' => strtoupper($request->transaction_id),
                'amount' => $subtotal,
                'user_id' => Auth::user()->id,
                'name' => $name,
                'paid_using' => 'MPESA',
                'ref_no' => $refNumber
            ]);

            foreach ($itemsInCart as $item) {
                DB::table('orders')->insert([
                    'transaction_code' => strtoupper($request->transaction_id),
                    'transaction_ref_no' => $refNumber,
                    'item_id' => $item->id,
                    'item_thumbnail' => $item->thumbnail_main,
                    'item_title' => $item->title,
                    'item_category' => $item->category,
                    'item_price' => $item->primary_price,
                    'item_quantity' => 1,
                    'item_quantity' => 'Pending',
                    'customer_id' => Auth::user()->id,
                    'customer_name' => $name,
                    'customer_phone' => Auth::user()->phone_number,
                    'customer_address' => Auth::user()->address,
                    'customer_zip_code' => Auth::user()->zip_code,
                    'customer_region' => Auth::user()->region,
                    'customer_city' => Auth::user()->city,
                    'customer_organization' => Auth::user()->organization
                ]);
            }

            Cart::destroy();
            $page = 'Thank You • Checkout';
            return view('checkout.complete', ['page' => $page]);

        } else {
            return back();
        }
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
    public function edit($id)
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
        //
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
