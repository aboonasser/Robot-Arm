<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\controll;
use Auth;
use Input;
use DB;

class ConnectArmController extends Controller
{
    public function test()
    {
        return "Welcom";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls = controll::latest()->limit(1)->get();

        return view('FrontEnd.Call Database.Call_Database', compact('calls'));


    }
    public function call()
    {
        $shows = controll::all();
        return view('FrontEnd.Call Database.call_all', compact('shows'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Database.Create_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        controll::create([
            "Name"=>Auth::user()->name,
            "Engine_1"=>$request->amountRange1,
            "Engine_2"=>$request->amountRange2,
            "Engine_3"=>$request->amountRange3,
            "Engine_4"=>$request->amountRange4,
            "Engine_5"=>$request->amountRange5,
            "Engine_6"=>$request->amountRange6,

        ]);

        return view('BackEnd.Database.Massege');

        /*      $controll = new controll;
              $controll->user = Auth::user()->id;
              $controll->angle1 = $request->angle;
              $controll->angle2 = $request->amountInput2;
              $controll->angle3 = $request->amountInput3;
              $controll->angle4 = $request->amountInput4;
              $controll->angle5 = $request->amountInput5;
              $controll->angle6 = $request->amountInput6;
              dd($request->all());*/
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
