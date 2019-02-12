<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $drivers = Driver::take(10)->get();
        //$drivers = Driver::all();
        return view('drivers.index',compact("drivers"));
    }
    public function show(Driver $driver)
    {
        return view('drivers.show',compact("driver"));
    }
}
