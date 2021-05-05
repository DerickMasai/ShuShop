<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing');
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
    public function show($category, $id)
    {
        $product = DB::table('shoes')
        ->where('id', '=', $id)
        ->get();
        $product = collect($product);

        if (!empty(Auth::user()->id) && Auth::user()->id != null) {
            $isSaved = DB::table('wishlists')
            ->where('shoe_id', '=', $id)
            ->where('user_id', '=', Auth::user()->id)
            ->get();

            if ($isSaved != null) {
                $inWishlist = true;
            }
    
            count($isSaved) > 0 ? $inWishlist = true : $inWishlist = false;
        }

        $inWishlist = false;

        $thumbnails = [$product[0]->thumbnail_main, $product[0]->thumbnail_one, $product[0]->thumbnail_two, $product[0]->thumbnail_three, $product[0]->thumbnail_four, $product[0]->thumbnail_five];

        $recommendations = DB::table('shoes')
            ->where('category', '=', $category)
            ->get()->shuffle()->take(4);

        $page = $product[0]->title . ' - ' . $product[0]->category;

        return view('product', ['page' => $page, 'product' => $product, 'thumbnails' => $thumbnails, 'recommendations' => $recommendations, 'inWishlist' => $inWishlist]);
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
