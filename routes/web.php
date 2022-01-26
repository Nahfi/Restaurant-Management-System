<?php

use App\Http\Controllers\Is_Admin;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin_all_Controller;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CheifController;


//user route
Route::group(['middleware'=>"check"],function(){

Route::get('/',[FoodController::class,'food'])->name("all_food1");
    
   

});

//auth route
Route::group(["middleware"=>'auth'],function(){

    Route::get('/check',[Is_Admin::class,"is_admin"]);



//admin route
Route::group(['middleware'=>'test'],function(){

    Route::get("/user",[Admin_all_Controller::class,'user'])->name("user");
    Route::get("/chef",[CheifController::class,'x'])->name("chef");
    Route::get("/load",[Admin_all_Controller::class,'load'])->name("loader");
    Route::get('/dlt/{id}',[Admin_all_Controller::class,'dlt'])->name('dlt');
    Route::get('/edit/{id}',[FoodController::class,'edit'])->name('edt');
    Route::get('/dlt/{id}',[FoodController::class,'dlt'])->name('dlt1');
    Route::get('/food',[Admin_all_Controller::class,'admin_food'])->name('food');
    Route::get('/food/all',[FoodController::class,'all_food'])->name('all_food');
    Route::post('/food',[FoodController::class,'admin_food_insert'])->name('insert_food');
    Route::post('/food/update',[FoodController::class,'admin_food_update'])->name('update_food');
   

});

 




});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');