<?php

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
    return view('pages.home');
})->name('home');
Route::get('/home', function () {
    return view('pages.home');
})->name('home');
Route::get('/gioithieu', function () {
    return view('pages.gioithieu');
})->name('gioithieu');
Route::get('/tuyendung', function () {
    return view('pages.tuyendung');
})->name('tuyendung');
Route::get('/chitiettuyendung', function () {
    return view('pages.chitiettuyendung');
})->name('chitiettuyendung');
Route::get('daotao', function () {
    return view('pages.daotao');
})->name('daotao');
Route::get('lienhe', function () {
    return view('pages.lienhe');
})->name('lienhe');