<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Form;
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



Route::get('/register',[RegistrationController::class,'index'])->name('register.index');
Route::post('/register',[RegistrationController::class,'store'])->name('register.store');
Route::get('/mylogin',[RegistrationController::class,'mylogin'])->name('login');
Route::get('/page',[RegistrationController::class,'main'])->name('page.main');
// Route::post('/page',[RegistrationController::class,'loginstore'])->name('page.loginstore');
Route::post('/mylogin', [RegistrationController::class, 'login']);
Route::post('/page',[RegistrationController::class,'upload'])->name('upload');
Route::get('/view',[RegistrationController::class,'view'])->name('view');
Route::get('/delete/{id}',[RegistrationController::class,'delete'])->name('delete');
Route::get('/search',[RegistrationController::class,'search'])->name('search');
Route::get('/update_view/{id}',[RegistrationController::class,'update_view'])->name('update_view');
Route::post('/update/{id}',[RegistrationController::class,'update'])->name('update');

Route::get('/get-product',[RegistrationController::class,'getproduct'])->name('getproduct');


