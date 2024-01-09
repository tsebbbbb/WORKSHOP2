<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
});
Route::get('/my-route',function(){
    return view('myfolder.mypage',$data);
});
Route::post('/my-route ',function(Request $req){
    $data['myinput'] = $req -> input('myinput');
    return view('myfolder.myroute',$data);
});
