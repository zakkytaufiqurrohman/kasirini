<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// reset password petugas not APi
Route::get('password_succes','PetugasAuth\PasswordSuccesController@index');
// end reset password

Route::group(['middleware' => 'auth'], function() {
    Route::resource('/produk','ProdukController');
    Route::resource('/transaksi','TransaksiController');
    Route::get('transaksi/cari/{id}','TransaksiController@cari')->name('cari');
});
