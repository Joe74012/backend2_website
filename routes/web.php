<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::fallback(function () {
    return "pagina bestaat niet";
});
