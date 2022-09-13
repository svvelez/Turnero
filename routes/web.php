<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TurneroController;



Route::get('/', function () {
    return view('turnero.general');
});

 Route::resource('turnero',TurneroController::class);
 Route::get('general', 'App\http\TurneroController@generall');

Route::get('/general', [TurneroController::class,'general'])->name('general');
Route::get('/consultaexterna', [TurneroController::class,'consultaexterna'])->name('consultaexterna');

