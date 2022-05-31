<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\frontend\WebsiteController;
use App\Http\Controllers\backend\AdminController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/','frontend.index')->name('website');
// Route::view('/',[WebsiteController::class,'index'])->name('home');


// ============================== Frontend Route List =================================
// Route::group(['prefix' => 'admin'],function (){

//     Route::get('/', [DashboardController::class, 'index'])->name('admin');
//     Route::resource('/roles',RolesController::class);
// });

// ============================== Admin Route List =================================
Route::group(['prefix' => 'admin'],function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/home', [AdminController::class, 'home'])->name('backend');
    Route::view('/start','backend.layouts.started');
    Route::view('/clock', 'backend.clock');
});
