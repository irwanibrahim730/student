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
    return view('welcome');
});

//redirect to the students resource controller
Route::get('/student', function () {
    return redirect('/students');
});

Route::resource('students','StudentController');


Route::get('export', 'StudentController@export')->name('export');
Route::get('importExportView', 'StudentController@importExportView');
Route::post('import', 'StudentController@import')->name('import');

Route::get('htmlpdf58','PDFController@htmlPDF58');
Route::get('generatePDF58','PDFController@generatePDF58');