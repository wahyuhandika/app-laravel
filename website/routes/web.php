<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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


//Model Home 
Route::get('/', function () {
    return view('pages/home');
});  


// Model Form Login & Registrasi
Route::get('/login',[FormController::class, 'login']);
Route::get('/registrasi',[FormController::class, 'registrasi']);