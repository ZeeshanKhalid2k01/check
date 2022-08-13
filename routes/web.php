<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileUpload;
use App\Http\Controllers\mailController;
use App\Http\Controllers\ListscompanyController;
use App\Http\Controllers\ListsemployeeController;


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
Route::get('employee/create', 'App\Http\Controllers\EmployeeController@create');
Route::post('employee/store', 'App\Http\Controllers\EmployeeController@store')->name('employee.store');
Route::get('employee/read', 'App\Http\Controllers\EmployeeController@read')->name('employee.read');
Route::get('employee/readonly', 'App\Http\Controllers\EmployeeController@readonly')->name('employee.readonly');
Route::get('employee/edit/{id}', 'App\Http\Controllers\EmployeeController@edit')->name('employee.edit');
Route::post('employee/update/{id}', 'App\Http\Controllers\EmployeeController@update')->name('employee.update');
Route::get('employee/delete/{id}', 'App\Http\Controllers\EmployeeController@delete')->name('employee.delete');



//---------------------------------Company Routes--------------------------------//
Route::get('company/create', 'App\Http\Controllers\CompanyController@create');
Route::post('company/store', 'App\Http\Controllers\CompanyController@store')->name('company.store');
Route::get('company/read', 'App\Http\Controllers\CompanyController@read')->name('company.read');
Route::get('company/readonly', 'App\Http\Controllers\CompanyController@readonly')->name('company.readonly');
Route::get('company/edit/{id}', 'App\Http\Controllers\CompanyController@edit')->name('company.edit');
Route::post('company/update/{id}', 'App\Http\Controllers\CompanyController@update')->name('company.update');
Route::get('company/delete/{id}', 'App\Http\Controllers\CompanyController@delete')->name('company.delete');


//---------------------------------listCompany Routes--------------------------------//
Route::get('listscompany/read', 'App\Http\Controllers\ListscompanyController@read')->name('listscompany.read');
Route::get('listscompany/apply', [ListscompanyController::class,"mailform"])->name('contact.create');
Route::post('listscompany/sendemail','App\Http\Controllers\ListscompanyController@sendmail')->name('sendmail2');
Route::get('listscompany/save/{id}', 'App\Http\Controllers\ListscompanyController@save');
Route::get('listscompany/admin', 'App\Http\Controllers\ListscompanyController@admin')->name('listscompany.admin');
Route::get('listscompany/edit/{id}', 'App\Http\Controllers\ListscompanyController@edit')->name('listscompany.edit');
Route::post('listscompany/update/{id}', 'App\Http\Controllers\ListscompanyController@update')->name('listscompany.update');
Route::get('listscompany/delete/{id}', 'App\Http\Controllers\ListscompanyController@delete')->name('listscompany.delete');
// Route::get('listscompany/save/{id}', 'App\Http\Controllers\ListscompanyController@save')->name('contact.create');
// Route::post('listscompany/sendemail', [ListscompanyController::class,"sendmail"])->name('sendmail');



//---------------------------------listEmployee Routes--------------------------------//
Route::get('listsemployee/read', 'App\Http\Controllers\ListsemployeeController@read')->name('listsemployee.read');
Route::get('listsemployee/save/{id}', 'App\Http\Controllers\ListsemployeeController@save');
Route::get('listsemployee/apply', [ListsemployeeController::class,"mailform"])->name('contact.create');
Route::post('listsemployee/sendemail','App\Http\Controllers\ListsemployeeController@sendmail')->name('sendmail');
Route::get('listsemployee/admin', 'App\Http\Controllers\ListsemployeeController@admin')->name('listsemployee.admin');
Route::get('listsemployee/edit/{id}', 'App\Http\Controllers\ListsemployeeController@edit')->name('listsemployee.edit');
Route::post('listsemployee/update/{id}', 'App\Http\Controllers\ListsemployeeController@update')->name('listsemployee.update');
Route::get('listsemployee/delete/{id}', 'App\Http\Controllers\ListsemployeeController@delete')->name('listsemployee.delete');
// Route::get('listsemployee/save/{id}', 'App\Http\Controllers\ListsemployeeController@save')->name('contact.create');
// Route::post('listsemployee/sendemail', [ListsemployeeController::class,"sendmail"])->name('sendmail');


//---------------------------------General Routes--------------------------------//
Route::get('/termsandconditions', 'App\Http\Controllers\general@terms');
Route::get('/confirm', 'App\Http\Controllers\general@confirm');
Route::get('/aboutus', 'App\Http\Controllers\general@aboutus');
Route::get('/privacypolicy', 'App\Http\Controllers\general@privacypolicy');
Route::get('/contactus', 'App\Http\Controllers\general@contactus');
Route::get('/adminpanel', 'App\Http\Controllers\general@adminpanel');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/confirm', [App\Http\Controllers\HomeController::class, 'confirm'])->name('confirm');



//---------------------------------Upload Routes--------------------------------//
Route::get('file/upload-file', [FileUpload::class, 'createForm']);
Route::post('file/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

Route::get('file/upload-file2', [FileUpload::class, 'createFormofImg']);
Route::post('file/upload-file2', [FileUpload::class, 'imgUpload'])->name('imgUpload');



//---------------------------------Mail Routes--------------------------------//
Route::get('general/contact', [general::class,"mailform"])->name('contact.create');
Route::post('mail/sendemail', [mailController::class,"sendmail"])->name('sendmail3');


//---------------------------------SMS Routes--------------------------------//
Route::get('/sendSMS', [App\Http\Controllers\TwilioSMSController::class, 'index']);
Route::get('sms/sucess', 'App\Http\Controllers\general@sms');


//---------------------------------Auth Routes--------------------------------//

Auth::routes();



// Route::get('listscompany/apply{id}', [ListscompanyController::class,"mailform2"]);
// Route::get('mail/contact2', [mailController::class,"mailform2"])->name('contact2.create');
// Route::get('mail/contact2/{id}');
// Route::get('mail/contact', [mailController::class,"mailform"])->name('contact.create');
// Route::post('mail/sendemail', [mailController::class,"sendmail"])->name('sendmail');
// Route::get('employee/create2', 'App\Http\Controllers\EmployeeController@create2');














