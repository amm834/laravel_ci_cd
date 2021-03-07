<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewItemController;
use App\Http\Controllers\MyItemController;

//Route::get('/add-data', [NewItemController::class,'addData']);

//Route::get('/', [NewItemController::class,'index']);

// Set Language Toggler
Route::get('/lang/{locale}',function ($locale) {
    Session::put('locale',$locale);
    return redirect()->back();
});

// Index  view
Route::get('/',[MyItemController::class,'index']);

Route::post('/',[MyItemController::class,'store']);