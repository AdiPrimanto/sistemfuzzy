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

Route::get('/', 'WelcomeController@getAkademik');
//  {
//     return view('welcome');
// });
Route::get('select_ajax/', 'WelcomeController@selectAjax');
Route::get('select_ajax2/', 'WelcomeController@selectAjax2');
Route::get('select_ajax3/', 'WelcomeController@selectAjax3');
Route::post('/', 'SubmitController@submit');

Route::get('/dashboard', function ()
{
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('akademik', 'AkademikController@index');
Route::post('akademik/create', 'AkademikController@create');
Route::get('akademik/{id_akademik}/delete', 'AkademikController@delete');

Route::get('/matakuliah', 'MatakuliahController@index')->name('matakuliah');
Route::post('/matakuliah/store', 'MatakuliahController@store');
Route::get('/matakuliah/{id_matakuliah}/edit', 'MatakuliahController@edit');
Route::post('/matakuliah/{id_matakuliah}/update', 'MatakuliahController@update');
Route::get('/matakuliah/{id_matakuliah}/delete', 'MatakuliahController@delete');

Route::get('/dosen', 'DosenController@index')->name('dosen');
Route::post('/dosen/store', 'DosenController@store');
Route::get('/dosen/{id_dosen}/edit', 'DosenController@edit');
Route::post('/dosen/{id_dosen}/update', 'DosenController@update');
Route::get('/dosen/{id_dosen}/delete', 'DosenController@delete');

Route::get('/kelas', 'KelasController@index')->name('kelas');
Route::post('/kelas/store', 'KelasController@store');
Route::get('/kelas/{id_kelas}/edit', 'KelasController@edit');
Route::post('/kelas/{id_kelas}/update', 'KelasController@update');
Route::get('/kelas/{id_kelas}/delete', 'KelasController@delete');

Route::get('/semester', 'SemesterController@index')->name('semester');
Route::post('/semester/store', 'SemesterController@store');

Route::get('/hasilkuisioner', 'KuisionerController@index');
Route::get('/simpanfuzzykuisioner', 'Controller@SimpanHasilFuzzy');
Route::get('/hapusfuzzykuisioner', 'Controller@HapusHasilFuzzy');

Route::get('/a', 'KuisionerController@index');

Route::get('/rekapitulasi', 'RekapitulasiController@index');

Route::get('/print', 'PrintController@index');
Route::get('/printganjil', 'PrintGanjilController@index');
Route::get('/printgenap', 'PrintGenapController@index');


// Route::get('/matakuliah', function ()
// {
//     return view('admin.matakuliah');
// });

// Route::post('submit', 'SubmitController@submit');
