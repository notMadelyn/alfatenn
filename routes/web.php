<?php

use App\Http\Controllers\Customer\CartsController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\UserRoleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(HomeController::class)
        ->prefix('customer')
        ->group(function() {
            Route::get('/home','index')->name('customer.home');          
            Route::post('/','addToCart')->name('customer.addToCart');            
        });

Route::controller(CartsController::class)->prefix('customer')->group(function(){
    Route::get('/carts' , 'index')->name('customer.cart');
});

Route::get('/manager/home', function() {
    return view('manager.home');
});