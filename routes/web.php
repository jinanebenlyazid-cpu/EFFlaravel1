<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return view('main');
});
Route::resource('evenements', EvenementController::class);
