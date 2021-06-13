<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\testDB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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


// Route::get('/testDB',function(){
//     $res = DB::select('select * from users');

//     return view('testDB',['res'=>$res]);
// });
Route::get('/post/{id}',[postController::class,'show']);
Route::get('/',function(){
    return view('homepage');
});
