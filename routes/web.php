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
    return view('auths.login');
});

Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('/login','AuthController@login')->name('login');
    Route::post('/postLogin','AuthController@postLogin');
    Route::get('/logout','AuthController@logout');
});



Route::group(['middleware' => ['auth','checkRole:admin','revalidate']],function(){
    Route::get('/siswa','SiswaController@index');
    Route::get('/siswa/tambah','SiswaController@tambah');
    Route::post('/siswa/create','SiswaController@create');
    Route::get('/siswa/ubah/{nis}','SiswaController@ubah');
    Route::put('/siswa/update/{nis}','SiswaController@update');
    Route::get('/siswa/delete/{nis}','SiswaController@delete');
    Route::get('/siswa/Profile/{nis}','SiswaController@profile');
    Route::get('/siswa/detailProfile/{nis}','SiswaController@detailProfile');
    Route::get('/mapel','MapelController@index');
    Route::get('/mapel/tambah','MapelController@tambah');
    Route::post('/mapel/create','MapelController@create');
    Route::get('/mapel/ubah/{id}','MapelController@ubah');
    Route::put('/mapel/update/{id}','MapelController@update');
    Route::get('/mapel/delete/{delete}','MapelController@delete');
    Route::get('/guru','GuruController@index');
    Route::get('/guru/tambah','GuruController@tambah');
    Route::post('/guru/create','GuruController@create');
    Route::get('/guru/ubah/{id}','GuruController@ubah');
    Route::put('/guru/update/{id}','GuruController@update');
    Route::get('/guru/delete/{delete}','GuruController@delete');
    // Route::get('/siakad','SiakadController@index');
    // Route::get('/siakad/tambah','SiakadController@tambah');
    // Route::post('/siakad/create','SiakadController@create');
    // Route::get('/siakad/ubah/{id}','SiakadController@ubah');
    // Route::put('/siakad/update/{id}','SiakadController@update');
    // Route::get('/siakad/delete/{id}','SiakadController@delete');
    Route::get('/cetak-nilai','SiakadController@cetakNilai')->name('cetak-nilai');
});

Route::group(['middleware' => ['auth','checkRole:admin,guru','revalidate']],function(){
    Route::get('/siakad','SiakadController@index');
    Route::get('/siakad/tambah','SiakadController@tambah');
    Route::post('/siakad/create','SiakadController@create');
    Route::get('/siakad/ubah/{id}','SiakadController@ubah');
    Route::put('/siakad/update/{id}','SiakadController@update');
    Route::get('/siakad/delete/{id}','SiakadController@delete');
});

Route::group(['middleware' => ['auth','checkRole:admin,siswa,guru','revalidate']],function(){
    Route::get('/dashboard','DashboardController@index');
});

Route::group(['middleware' => ['auth','checkRole:admin,siswa','revalidate']],function(){
    Route::get('/profileSiswa','SiswaController@profileSiswa');
    Route::get('/detailProfile','SiswaController@detailProfileSiswa');
    Route::get('/rangkuman', ['uses'=>'SiakadController@index', 'as'=>'siakad.rangkuman_nilai']);
    Route::get('/siakad/exportpdf','SiakadController@exportpdf');
});