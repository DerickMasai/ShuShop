<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'Settings • Dashboard';

        return view('dashboard.settings', ['page' => $page]);
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
        $generalInfo = DB::table('users')
        ->where('id', '=', $id)
        ->get();
        $generalInfo = collect($generalInfo);

        if (!empty($request->first_name) && !empty($request->last_name) && !empty($request->email) && !empty($request->phone_number) && strlen($request->phone_number) > 8) {
            
            // Check that AT LEAST 1 field has been modified before updating DB info
            if ($request->first_name != $generalInfo[0]->first_name || $request->last_name != $generalInfo[0]->last_name || $request->email != $generalInfo[0]->email || $request->phone_number != $generalInfo[0]->phone_number) {
                $infoToUpdate = DB::table('users')
                ->where('id', $id)
                ->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'updated_at' => now()
                ]);
                $general_response = "Your changes have been saved successfully.";
            } else {
                $general_response = "No changes have been made in this section.";
            }

        } else {
            $general_response = "Please fill out all the required fields before saving.";
        }

        $addressInfo = DB::table('users')
        ->where('id', '=', $id)
        ->get();
        $addressInfo = collect($addressInfo);

        if (!empty($request->zip_code) && !empty($request->region) && !empty($request->address) && !empty($request->city)) {
            
            // Check that AT LEAST 1 field has been modified before updating DB info
            if ($request->zip_code != $addressInfo[0]->zip_code || $request->region != $addressInfo[0]->region || $request->address != $addressInfo[0]->address || $request->city != $addressInfo[0]->city || $request->organization != $addressInfo[0]->organization) {
                $infoToUpdate = DB::table('users')
                ->where('id', $id)
                ->update([
                    'zip_code' => $request->zip_code,
                    'region' => $request->region,
                    'address' => $request->address,
                    'city' => $request->city,
                    'organization' => $request->organization,
                    'updated_at' => now()
                ]);
                $address_response = "Your changes have been saved successfully.";
            } else {
                $address_response = "No changes have been made in this section.";
            }

        } else {
            $address_response = "Please fill out all the required fields before saving.";
        }

        return back();

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
