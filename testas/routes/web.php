<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Radar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return view('labas');
});

Route::get('/radars', 'RadarsController@index');
//    $radar = Radar::take(10)->get();
//    return view('radars.index',compact("radar"));
//});
Route::get('radars/{radar}/edit', 'RadarsController@edit');
Route::put('radars/{radar}', 'RadarsController@update');

Route::get('radars/{radar}/delete', 'RadarsController@delete');
Route::delete('radars/{radar}', 'RadarsController@destroy');

Route::get('/radars/{radar}/add/{driver}', 'RadarsController@associate');

Route::get('/radars/create', 'RadarsController@create');
Route::post('radars', 'RadarsController@store');

Route::get('/radars/{radar}', 'RadarsController@show');



//Route::get('/drivers', 'DriversController@index');
//Route::get('/drivers/{driver}', 'DriversController@show');

Route::resource ('drivers', 'DriversController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
