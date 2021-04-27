<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/build',[HelloController::class,'index']);
Route::get('/building/{room}', [HelloController::class, 'number']);