<?php

use App\Http\Controllers\Is_Admin;
use Illuminate\Support\Facades\Route;




//user route
Route::group(['middleware'=>"check"],function(){

    Route::get('/', function () {
        return view('home');
    })->name("index");
    
   

});

Route::get('/check',[Is_Admin::class,"is_admin"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');