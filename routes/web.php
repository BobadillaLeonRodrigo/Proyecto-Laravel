<?php

use Illuminate\Support\Facades\Route;

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
//hacer comentario
Route::get('/', function () {
    return view('welcome');
});

//Google Maps
Route::get('/google-autocomplete', [App\Http\Controllers\GoogleController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-register', [App\Http\Controllers\Admin\DashboardController::class, 'registered']);
    Route::get('/role-edit/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'registerEdit']);
    Route::put('/role-register-update/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'registerUpdate']);
    Route::delete('/role-delete/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'registerDelete']);

    
    Route::get('/alumnos',[App\Http\Controllers\Admin\AlumnosController::class,'index']);
    Route::post('/save-alumnos',[App\Http\Controllers\Admin\AlumnosController::class,'Alums']);
    Route::get('/alumnos-us/{id}',[App\Http\Controllers\Admin\AlumnosController::class,'edit']);
    Route::put('/alumnos-update/{id}',[App\Http\Controllers\Admin\AlumnosController::class,'update']);
    Route::delete('alumnos-us-delete/{id}',[App\Http\Controllers\Admin\AlumnosController::class,'delete']);

});
