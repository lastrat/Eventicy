<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('login');
});

Route::get('login/',function(){
    return view('login');
})->name('login');


Route::get('register/',function(){
    return view('register');
});

Route::get('user/save',function(){
    return view('register');
})->name('register');

Route::post('login/save',[userController::class,'login'])->name('postLogin');
Route::get('/logout', [userController::class,'userLogout'])->name('logout');



Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard',[dashboardController::class,'index'])->name(('dashboard'));
    Route::get('/user/profile',[userController::class,'getProfile'])->name('getProfile');
});
