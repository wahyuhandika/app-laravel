<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;

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
// Route::get('/', function () {
//     return view('pages/home');
// });  
// Route::get('/pendaftaran', function () {
//     return view('pages/pendaftaran');
// });  
// Route::get('/absensi', function () {
//     return view('pages/absensi');
// });  
// Route::get('/materi', function () {
//     return view('pages/materi');
// });  


// Model Form Login & Registrasi Method GET
Route::get('/login',[FormController::class, 'login']);
Route::get('/registrasi',[FormController::class, 'registrasi']);


// Model navbar / Pages / Method GET
Route::get('/',[HomeController::class, 'home']);
Route::get('/pendaftaran',[HomeController::class, 'pendaftaran']);
Route::get('/absensi',[HomeController::class, 'absensi']);
Route::get('/materi',[HomeController::class, 'materi']);