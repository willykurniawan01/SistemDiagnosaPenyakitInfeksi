<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'SidipiController@index')->name('sidipi-home');
Route::get('/artikel', 'ArtikelController@index')->name('sidipi-artikel');
Route::get('/penyakit', 'ArtikelPenyakitController@index')->name('sidipi-penyakit');
Route::get('/diagnosa', 'DiagnosaController@index')->name('sidipi-diagnosa');
Route::get('/diagnosa/hasil/{id}', 'DiagnosaController@show')->name('sidipi-hasil-diagnosa');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('sidipi-single');
Route::get('/developer/{id}', 'DeveloperController@show')->name('sidipi-developer');

Route::group(['middleware' => ['auth']], function () {
    Route::get('Admin/home', 'HomeController@index')->name('home');
    Route::get('Admin/penyakit', 'PenyakitController@index')->name('penyakit');
    Route::get('Admin/gejala', 'GejalaController@index')->name('gejala');
    Route::get('Admin/post', 'PostController@index')->name('post');

    Route::post('Admin/post', 'PostController@index')->name('cari');

    //inputpenyakit
    Route::post('Admin/penyakit/input', 'PenyakitController@store')->name('input-penyakit');

    //edit penyakit
    Route::get('Admin/penyakit/{id}', function ($id) {
        return $id;
    })->name('edit-penyakit');

    //hapus penyakit
    Route::get('Admin/penyakit/hapus/{id}', 'PenyakitController@destroy')->name('hapus-penyakit');


    //inputgejala
    Route::post('Admin/gejala/input', 'GejalaController@store')->name('input-gejala');

    //hapus gejala
    Route::get('Admin/gejala/hapus/{id}', 'GejalaController@destroy')->name('hapus-gejala');

    //edit gejala
    Route::get('Admin/gejala/{id}', function ($id) {
        return $id;
    })->name('edit-gejala');

    //Tambah Relasi Gejala
    Route::post('Admin/gejala/relasi/add', 'GejalaController@addRelation')->name('tambah-relasi');

    //Tambah Post
    Route::post('Admin/post/input', 'PostController@store')->name('input-post');


    //Edit post
    Route::get('Admin/post/edit/{id}', 'PostController@show')->name('edit-post');

    //update post 
    Route::post('Admin/post/update/{id}', 'PostController@update')->name('update-post');

    //Hapus Post
    Route::get('Admin/post/hapus/{id}', 'PostController@destroy')->name('hapus-post');
});
