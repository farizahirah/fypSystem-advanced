<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\svControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student; 


Route::get("/",[homeControl::class,"index"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);
Route::get("/users", [adminControl::class,"user"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::view('projectform','admin.projectform');
Route::POST('add', [adminControl::class,'addData']);
Route::get("projectlist",[adminControl::class,'show']);

Route::get("svprojectlist",[svControl::class,'show']);
Route::get("upd/{id}",[svControl::class,'showStud']);
Route::POST("edit",[svControl::class,'update']);