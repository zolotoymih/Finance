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

Route::get('/', 'MainController@index')->name('index'); //метод index из MainController.php

Route::get('/reports', 'ReportController@index')->name('reports');

Route::get('/{name_form}', 'MainController@report')->name('report');

Route::get('/vova-test', 'MainController@vovaTest')->name('vova-test');

Route::get('/report/reset', 'ResetController@reset')->name('reset_db');

//Route::post('', 'MainController@insert');
