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

Route::get('/', 'HomepageController@index')->name('sidipi-home');
Route::get('/artikel', 'HomepageController@article')->name('sidipi-artikel');

Route::get('artikel/{category}', 'HomepageController@article')->name('sidipi-category');

Route::get('/penyakit', 'ArtikelPenyakitController@index')->name('sidipi-penyakit');
Route::get('/penyakit/live', 'ArtikelPenyakitController@live_search')->name('live_search');

Route::get('penyakit/{id}', 'ArtikelPenyakitController@show')->name('sidipi-single-penyakit');

//diagnosa
Route::get('/diagnosa', 'DiagnosaController@index')->name('sidipi-diagnosa');
Route::post('/diagnosa/proses', 'DiagnosaController@diagnosa')->name('proses-diagnosa');
//diagnosa

Route::get('/artikel/detail/{id}', 'HomepageController@show')->name('sidipi-single');
Route::get('/developer/{id}', 'DeveloperController@show')->name('sidipi-developer');


Route::group(['middleware' => ['auth']], function () {
    Route::get('Admin/home', 'HomeController@index')->name('home');
    Route::get('Admin/penyakit', 'PenyakitController@index')->name('penyakit');
    Route::get('Admin/gejala', 'GejalaController@index')->name('gejala');
    Route::get('Admin/post', 'PostController@index')->name('post');
    Route::post('Admin/post', 'PostController@index')->name('cari-post');

    //inputpenyakit
    Route::post('Admin/penyakit/input', 'PenyakitController@store')->name('input-penyakit');

    //edit penyakit
    Route::get('Admin/penyakit/edit/{id}', 'PenyakitController@edit')->name('edit-penyakit');

    //update penyakit
    Route::post('Admin/penyakit/update/{id}', 'PenyakitController@update')->name('update-penyakit');

    //hapus penyakit]
    Route::get('Admin/penyakit/hapus/{id}', 'PenyakitController@destroy')->name('hapus-penyakit');
    //cari penyakit
    Route::post('Admin/penyakit', 'PenyakitController@index')->name('cari-penyakit');

    //inputgejala
    Route::post('Admin/gejala/input', 'GejalaController@store')->name('input-gejala');

    //hapus gejala
    Route::get('Admin/gejala/hapus/{id}', 'GejalaController@destroy')->name('hapus-gejala');

    //edit gejala
    Route::get('Admin/gejala/edit/{id}', 'GejalaController@edit')->name('edit-gejala');

    //update gejala
    Route::post('Admin/gejala/update/{id}', 'GejalaController@update')->name('update-gejala');

    //Tambah Relasi Gejala
    Route::post('Admin/gejala/relasi/add', 'GejalaController@addRelation')->name('tambah-relasi');

    //Hapus Relasi Gejala
    Route::get('Admin/gejala/relasi/hapus/{id}', 'GejalaController@deleteRelation')->name('hapus-relasi-gejala');

    //Tambah Post
    Route::post('Admin/post/input', 'PostController@store')->name('input-post');


    //Edit post
    Route::get('Admin/post/edit/{id}', 'PostController@show')->name('edit-post');

    //update post 
    Route::post('Admin/post/update/{id}', 'PostController@update')->name('update-post');

    //Hapus Post
    Route::get('Admin/post/hapus/{id}', 'PostController@destroy')->name('hapus-post');

    //hapus dari popular
    Route::get('Admin/post/hapus-popular/{id}', 'PostController@deleteFromPopular')->name('hapus-popular');

    //tambahkan ke popular
    Route::get('Admin/post/tambah-popular/{id}', 'PostController@addToPopular')->name('tambah-popular');
});
