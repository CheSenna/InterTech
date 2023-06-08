<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Crud;

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
return view('Index_Gen');
});

Route::get('/dashboard', [Homecontroller::class, 'checkUserType']);

Route::get('/admin/dashboard', function(){
    return view('admin-dashboard');
})->name('admin.dashboard');

Route::get('/user/dashboard', function(){
    return view('Index_Gen');
})->name('user.home');

Route::get('students', App\Http\Livewire\Crud::class);
