<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
URL::forceScheme('https');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', 'ItemController');



