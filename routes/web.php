<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


//Route::get('/', [\App\Http\Controllers\DashController::class , 'home']);
//Route::get('dashboard', [\App\Http\Controllers\DashController::class, 'dash']);
//Route::post('/dashboard', [\App\Http\Controllers\DashController::class, 'validation']);
Route::get('/dashboard',function (){
    return view('dashboard');
});
Route::post('send',function (){
    return 'sorry';
})->middleware('age');
Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'getfromApi']);

Route::get('/' , function (){
//    $product =DB::table('products')->get();
//    $product =DB::table('products')->find(2);
//    $product =DB::table('products')->insert([
//        'title' => 'product3',
//        'slug' => 'product-3',
//        'price'=>300,
//        'description'=> 'blabla',
//        'category'=>'porn'
//    ]);
//    dd($product->price);
//    $product = \App\Models\Product::all();
//    dd($product);
    return view('home');
});
Route::get('/card',function (){
    return view('card');
});

Route::get('products',[\App\Http\Controllers\ProductController::class,'select']);

Auth::routes();

