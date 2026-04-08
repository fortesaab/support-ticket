<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::livewire('/smoke-test', 'pages::smoke-test');
