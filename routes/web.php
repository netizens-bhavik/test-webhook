<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routeshdfgj
|-------------------------------------dfg-------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of themd will
| be assigned to the "web" middleware group. Make something great!
|d
*/

Route::get('/', function () {
    return view('welcome');
});
