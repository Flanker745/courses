<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\videoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',[aboutController::class , "show"] );
Route::patch("/about",[aboutController::class , "update"] );

Route::get('/galleryC',[galleryController::class , "create"] );
Route::get('/galleryS',[galleryController::class , "show"] );

Route::get('/courseC',[courseController::class , "create"] );
Route::get('/courseS',[courseController::class , "show"] );
Route::post("/course" ,[courseController::class , "store"] );
Route::get('/course/{id}' ,[courseController::class , "status"]  );
Route::get('/courses/{id}' ,[courseController::class , "create"]  );

Route::get('/videoC',[videoController::class , "create"] );
Route::get('/videoS',[videoController::class , "show"] );

Route::get("/login" , [loginController::class ,  "create"] );
