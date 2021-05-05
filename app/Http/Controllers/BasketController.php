<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class BasketController extends Controller
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

        $page = 'Basket • Checkout';

        if (Cart::count() > 0) {
            return view('checkout.basket', ['page' => $page, 'itemsInCart' => $itemsInCart, 'subtotal' => $subtotal]);
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
        Cart::remove($id);
        return back()->with('success_message', 'Item has been removed from your cart.');
    }
}
