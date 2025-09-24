<?php

namespace App\Http\Controllers;

use App\Models\jssondata;
use Illuminate\Http\Request;

class JssondataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $jsondata = Jssondata::get();
    // return $jsondata->pluck('meta_data');

    //  $jsondata = Jssondata::first();
    // return response()->json($jsondata->meta_data);

    // $jsondata = Jssondata::find(1);
    // return $jsondata->meta_data['name'];

// $jsondata = Jssondata::find(1);
//     $name = $jsondata->meta_data['name'];
//     $address = $jsondata->meta_data['address'];
//     return 'my name is '. $name.'  and address is  '.$address;

// $user = Jssondata::whereJsonLength('meta_data->name','kamal')->get();
// return $user;

// $user = Jssondata::where('id',1)->update([
// 'meta_data->address'=>'korangi',

// ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

          Jssondata::create([
            'meta_data' =>[
            'name' => "kamal",
            'email' => 'kamal@gmail.com',
            'mobile'=> 03023017627,
            'address' => 'karachi',
            ]
        ]);
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
     * @param  \App\Models\jssondata  $jssondata
     * @return \Illuminate\Http\Response
     */
    public function show(jssondata $jssondata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jssondata  $jssondata
     * @return \Illuminate\Http\Response
     */
    public function edit(jssondata $jssondata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jssondata  $jssondata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jssondata $jssondata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jssondata  $jssondata
     * @return \Illuminate\Http\Response
     */
    public function destroy(jssondata $jssondata)
    {
        //
    }
}
