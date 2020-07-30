<?php

use Illuminate\Support\Facades\Route;

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
//  home page boolean

Route::get('/', function () {
    return view('pages.home');
    // si utilizza il punto per spostarsi all'interno delle cartelle
});


//  pagina privacy boolean
Route::get('/privacy', function () {
    return view('pages.privacy');

});

Route::get('/dopo-il-corso', function () {
    return view('pages.dopo');

});
