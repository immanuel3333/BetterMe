<?php
/*
Nama File   :web.php
NIM         :11S17023
Kelas       :14 IF 1
*/

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


Route::get('/',function(){
    return redirect('login');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Exercise/{id}', 'HomeController@latihan')->name('exercise');
Route::get('/kirim-email','EmailController@index');
Route::get('/home/create', 'HomeController@create');

Route::get('/home/form', 'HomeController@form');
Route::get('/rekomendasi', 'HomeController@rekomendasi');
Route::post('/home', 'HomeController@store');
Route::get('/rekomendasi/{id}/delete', 'HomeController@delete');
Route::get('/rekomendasi/{id}/edit', 'HomeController@edit');
Route::get('/about', 'HomeController@about');

Route::get('/home2', 'HomeController@homeadmin');

Route::get('/create2', 'LatihanController@createadmin');
Route::post('/create2', 'LatihanController@store');
Route::get('/edit2/{id}', 'LatihanController@EditAdmin');
Route::post('/edit2/{id}', 'LatihanController@edit');
Route::get('/delete/{id}', 'LatihanController@delete');
Route::get('/exercise2', 'LatihanController@index');
Route::get('/latihan', 'LatihanController@view');
