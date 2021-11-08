<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jugadores', function () {
    return view('jugadores');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');  //name = texto de confirmacion para el usuario PE: password.confirm

Route::get('/cambioestado', function () {
    return view('createCambioEStado');
})->middleware(['auth']);

Route::get('file-upload', [FileUploadController::class, 'index']);
Route::post('store-file', [FileUploadController::class, 'store']);

require __DIR__.'/auth.php';
