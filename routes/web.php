<?php

use App\Http\Controllers\areaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Ruta para mostrar area
Route::resource('Area', AreaController::class);

Route::get('/areas/{area}/edit', [AreaController::class, 'edit'])->name('areas.edit');

