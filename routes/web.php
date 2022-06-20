<?php

use App\Http\Controllers\CategoryControler;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
        $pending = DB::table('products')->where('status','pending')->count();
        $approve = DB::table('products')->where('status','approve')->count();
        $reject = DB::table('products')->where('status','reject')->count();
    return view('index',['reject'=>$reject,'approve'=>$approve,'pending'=>$pending]);
});
Route::get('/status',function(){
    $product=DB::table('products')->where('id',3)->get();
    dd($product);
});
Route::resource('/category', CategoryControler::class); 
Route::resource('/product',ProductController::class);
