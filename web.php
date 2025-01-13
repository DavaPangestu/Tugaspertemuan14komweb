<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/halo-apa-kabar', function () {
    return 'Halo apa kabar dunia';
});

Route::get('/halo-apa-kabar/{nama}', function ($nama) {
    return "Halo apa kabar $nama";
});

Route::get('/nama/{namadepan}/{namabelakang}', function ($namadepan,$namabelakang) {
    return "Halo apa kabar $namadepan $namabelakang";
});

Route::get('/home',[BiodataController::class, 'home']);
Route::get('/about',[BiodataController::class, 'about']);

//Tanpa Controller
Route::get('/web', function(){
    return view('home'); //lokasi:: resouces/views
})->name('home');
Route::get('/web/about', function(){
    return view('about'); //lokasi:: resouces/views
})->name('about');
Route::get('/web/contact', function(){
    return view('contact'); //lokasi:: resouces/views
})->name('contact');

Route::get('/new',[PageController::class, 'home'])->name('home');
Route::get('/new',[PageController::class, 'about'])->name('about');
Route::get('/new',[PageController::class, 'contact'])->name('about');

use App\Http\Controllers\HalController;
Route::get('/baru/home',[HalController::class, 'home'])->name('topmenu1_blade');
Route::get('/baru/about',[HalController::class, 'about'])->name('topmenu2_blade');
Route::get('/baru/contact',[HalController::class, 'contact'])->name('topmenu3_blade');


use App\Http\Controllers\BiodataController;

Route::resource('biodatas', BiodataController::class);
