<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\History;
use Log;
class PhyreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function alert(Request $request)
     {
       $_addr = $request->input('address');
       //ilagay sa db
       History::create(['address' => $_addr]);
      //  DB::table('history')->insert(['address' => $_addr,'created_at' =>, 'updated_at'=>s ]);
       //return View::make('alert')->with('address', $_addr);
     }

    public function index(Request $request)
    {
        //
        if($request){
          $_addr = $request->input('address');
          $_lat = $request->input('lat');
          $_lng = $request->input('lng');
          History::create([
            'address' => $_addr,
            'lng' => $_lng,
            'lat' => $_lat
          ]);
          // console "receive request from";
          // return View::make('alert')->with('address', $_addr);

        }
        else{
          echo "no requests";
          return view('/');

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
        //
    }
    function getData(Request $request)
    {
        $data['data'] = DB::table('histories') -> get();
        if (count($data)>0){
            return view('history', $data);
        }
        else{
            return view('history');
        }
    }

    function lala(Request $request){
        return view('welcome');
    }
}

