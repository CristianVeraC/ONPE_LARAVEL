<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\OnpeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(OnpeController::class )->Group(function(){
    Route::get('/','index')->name('/');
    Route::get('participacion','particpacion')->name('participacion');
    Route::get('participacion_total/{idLocalVotos}','particpacion')->name('participacion');
    Route::get('actas_ubigeo/{id}','actas_ubigeo')->name('actas_ubigeo');
    Route::get('actas_numero/{id}','actas_numero')->name('actas_numero');
});
