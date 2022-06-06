<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/about', function(){
    return view('about',[
        "nama"=>"Diah Kamalia",
        "email"=>"200411100061@student.trunojoyo.ac.id",
        "alamat"=>"Bangkalan",
        "gambar"=>"mely.jpg"
    ]);
});


Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');

Route::post('/updatedata/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata');
