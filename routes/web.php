<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return 'hello word';
});



Route::get('/user',[UserController::class,'index']);
Route::get('/product',[ProductController::class,'index'])->name('index_product');

Route::post('/request',function(Request $request){
    return $request->email;
});


Route::get('/category/{id}/{name}',[CategoryController::class,'index'])->name('cat');