<?php

use Illuminate\Support\Facades\Route;
use App\Models\Example;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $data = Example::all();
    return view('test', compact('data'));
});