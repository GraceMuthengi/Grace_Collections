<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function () { return view('website.home'); });
Route::get('/about-us', function () { return view('website.about'); });
Route::get('/contact-us', function () { return view('website.contact'); });
Route::get('/shop', function () { return view('website.shop'); });
Route::get('/faqs', function () { return view('website.faq'); });