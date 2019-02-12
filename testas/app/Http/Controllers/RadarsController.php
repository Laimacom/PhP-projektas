<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Radar;
use Illuminate\Http\Request;

class RadarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$radars = Radar::take(10)->get();
        $radars = Radar::orderBy('date', 'desc')->paginate(15);
        return view('radars.index',compact("radars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('radars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $radar = new Radar;
        $radar->date = $request->input('date');
        $radar->number = $request->input('number');
        $radar->distance = $request->input('distance');
        $radar->time = $request->input('time');
        $radar->save();
        return redirect('/radars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function show(Radar $radar)
    {
        return view('radars.show',compact("radar"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function edit(Radar $radar)
    {
        return view('radars.edit', compact('radar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Radar $radar)
    {
        $radar->date = $request->input('date');
        $radar->number = $request->input('number');
        $radar->distance = $request->input('distance');
        $radar->time = $request->input('time');
        $radar->save();
        return redirect('/radars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */

    public function delete(Radar $radar)
    {
        return view('radars.destroy', compact('radar'));
    }

    public function destroy(Radar $radar)
    {
        $radar->delete();
        return redirect('/radars');
    }

    public function associate(Radar $radar, Driver $driver){
        $radar->driver()->associate($driver)->save();
        return redirect('/radars');
    }
}
