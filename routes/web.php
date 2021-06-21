<?php

use App\Models\Result;
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

Route::get('/', 'Front\HomeController@index');
Route::get('result-public', 'Front\ResultPublicController@index');
Route::get('result-public/check', 'Front\ResultPublicController@check');


Route::get('report-result', 'ReportResultController@index');





require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {

	Route::group(['namespace' => 'Admin'], function () {
		Route::get('dashboard', 'DashboardController@index');

		Route::get('user-profile', 'UserProfileController@index');
		Route::post('user-profile/update-user', 'UserProfileController@updateUser');
		Route::post('user-profile/renew-password', 'UserProfileController@renewPassword');

		Route::resource('school', 'SchoolController');
		Route::resource('user-school', 'UserSchoolController');

		Route::get('import-data', 'ImportDataController@index');
		Route::post('import-data', 'ImportDataController@store');

		Route::resource('result', 'ResultController');
		Route::delete('result-massdelete', 'ResultController@massdelete');

		Route::get('export-excel-rekap', 'ExportExcelRekapController@export');

		Route::get('download-example-excel', 'DownloadExampleExcelController@download');

		Route::get('student-school', 'StudentSchoolController@index');
	});


	// AutoComplete
	Route::get('autocomplete/school', 'Autocomplete\AutocompleteSchoolController@get');
	Route::get('autocomplete/student', 'Autocomplete\AutocompleteStudentController@get');
});
