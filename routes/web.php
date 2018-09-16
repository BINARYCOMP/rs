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

Route::get('/', 'login@index');

Route::prefix('authentication')->group(function(){
    Route::post('/login','login@auth')->name('auth.login.post');
});

Route::prefix('dashboard')->group(function(){
    Route::get('/','dashboard@index')->name('dashboard');
});

Route::prefix('Barang')->group(function(){
    Route::get('/','barang@index')->name('barang');
    Route::get('/delete/{id}','barang@hapus')->name('barang.hapus');
    Route::get('/edit/{id}','barang@edit_view')->name('barang.edit');
    Route::post('/edit','barang@edit')->name('barang.edit.post');
});
