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

Route::get('/','Front\HomeController@index');


require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function () { 

	Route::get('dashboard','Admin\DashboardController@index');

	Route::get('user-profile','Admin\UserProfileController@index');
	Route::post('user-profile/update-user','Admin\UserProfileController@updateUser');
	Route::post('user-profile/renew-password','Admin\UserProfileController@renewPassword');

	Route::resource('school','Admin\SchoolController');
	Route::resource('user-school','Admin\UserSchoolController');

	// AutoComplete
	Route::get('autocomplete/school','Autocomplete\AutocompleteSchoolController@get');
});
