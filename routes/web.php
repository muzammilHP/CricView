<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;

Route::controller(CustomerController::class)->group(function() {
    Route::get('/', 'homepage')->name('homepage');
    Route::get('matches','matches')->name('matches');
    Route::get('profile','profile')->name('profile');
    Route::post('updateprofile','updateprofile')->name('updateprofile');
    Route::post('changepassword','changepassword')->name('changepassword');
    Route::get('pchange_v','pchange_v')->name('pchange_v');
    Route::get('datatables','datatables')->name('datatables');
    Route::get('pak_aus','pak_aus')->name('pak_aus');    
    Route::get('bbl','bbl')->name('bbl');    
    Route::get('tickets','tickets')->name('tickets'); 
    Route::get('pakaus_match2','pakaus_match2')->name('pakaus_match2'); 
    Route::get('pakaus_match3','pakaus_match3')->name('pakaus_match3'); 
    Route::get('optus','optus')->name('optus'); 
    Route::get('checkout','checkout')->name('checkout'); 
});

Route::controller(AuthController::class)->group(function(){
    Route::get('signup','signup')->name('signup');
    Route::post('store','store')->name('store');
    Route::get('login','login')->name('login');
    Route::post('authenticate','authenticate')->name('authenticate');
});

