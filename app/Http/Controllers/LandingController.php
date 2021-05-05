<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bestsellers = DB::table('shoes')
            ->where('tag', '=', 'Best Seller')
            ->get()->shuffle()->take(8);
        $bestsellers = collect($bestsellers);

        $training = DB::table('shoes')
            ->where('category', '=', 'Training')
            ->get()->shuffle()->take(8);
        $training = collect($training);

        $football = DB::table('shoes')
            ->where('category', '=', 'Football')
            ->get()->shuffle()->take(8);
        $football = collect($football);

        $lifestyle = DB::table('shoes')
            ->where('category', '=', 'Lifestyle')
            ->get()->shuffle()->take(8);
        $lifestyle = collect($lifestyle);

        $basketball = DB::table('shoes')
            ->where('category', '=', 'Basketball')
            ->get()->shuffle()->take(8);
        $basketball = collect($basketball);

        $page = 'The Shoe Sactuary';

        return view('landing', ['page' => $page, 'bestsellers' => $bestsellers, 'training' => $training, 'football' => $football, 'lifestyle' => $lifestyle, 'basketball' => $basketball]);
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
        //
    }
}
