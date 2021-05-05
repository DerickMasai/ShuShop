<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Wishlist;
use Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'Wishlist • Dashboard';

        $wishlistArray = DB::table('wishlists')
        ->select('shoe_id')
        ->where('user_id', Auth::user()->id)
        ->get();
        $wishlistArray = collect($wishlistArray);

        $tempArray = array();

        for ($i=0; $i < $wishlistArray->count(); $i++) { 
            array_push($tempArray, $wishlistArray[$i]->shoe_id);
        }

        $wishlist = collect();
        
        for ($i=0; $i < count($tempArray); $i++) {
            $shoe = DB::table('shoes')
            ->where('id', '=', $tempArray[$i])
            ->get();
            $wishlist->push($shoe[0]);
        }

        return view('dashboard.wishlist', ['page' => $page, 'wishlist' => $wishlist]);
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
    public function store(Request $request, $id)
    {
        if (!empty($id) && is_numeric($id)) {
            $addToList = DB::table('wishlists')->insert([
                'user_id' => Auth::user()->id,
                'shoe_id' => $id
            ]);
        }
        
        return redirect()->back();
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
    public function destroy(Request $request, $id)
    {
        DB::table('wishlists')
        ->where('shoe_id', $id)
        ->first()
        ->delete();
        return redirect()->back();
    }
}
