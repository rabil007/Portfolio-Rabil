<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Project Detail Routes
Route::get('/projects/nexus', function () {
    return view('projects.nexus');
});

Route::get('/projects/educator', function () {
    return view('projects.educator');
});

Route::get('/projects/iame', function () {
    return view('projects.iame');
});

Route::get('/projects/parambadan', function () {
    return view('projects.parambadan');
});

Route::get('/projects/zeacut', function () {
    return view('projects.zeacut');
});
