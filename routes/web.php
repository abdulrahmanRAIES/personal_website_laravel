<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\AboutPageController;
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

// Route::get('/', function () {
//     return view('pages.index');
// });


Route::get('/', 'FrontEnd\PagesController@index')->name('home');
Route::get('/admin/dashborad', 'FrontEnd\PagesController@dashborad')->name('admin.dashborad');

// Route::get('/admin/about', 'AboutPageController@index')->name('admin.about');
// Route::put('/admin/about', 'AboutPageController@update')->name('admin.about.update');
// Route::resource('/admin/about', 'BackEnd\AboutPageController');

// Route::get('/admin/experience/create', 'ExperiencePageController@create')->name('admin.experience.create');
// Route::post('/admin/experience/create', 'ExperiencePageController@store')->name('admin.experience.store');
// Route::get('/admin/experience/list', 'ExperiencePageController@list')->name('admin.experience.list');
// Route::get('/admin/experience/edit/{id}', 'ExperiencePageController@edit')->name('admin.experience.edit');
// Route::post('/admin/experience/update{id}', 'ExperiencePageController@update')->name('admin.experience.update');
// Route::delete('/admin/experience/destroy{id}', 'ExperiencePageController@destroy')->name('admin.experience.destroy');
Route::resource('/admin/experience', 'BackEnd\ExperiencePageController')->names([
    'index' => 'experience.list'
]);

// Route::get('/admin/education/create', 'EducationPageController@create')->name('admin.education.create');
// Route::post('/admin/education/create', 'EducationPageController@store')->name('admin.education.store');
Route::get('/admin/education/list', 'BackEnd\EducationPageController@list')->name('admin.education.list');
// Route::get('/admin/education/list', EducationPageController::class,'list');
// Route::get('/admin/education/edit/{id}', 'EducationPageController@edit')->name('admin.education.edit');
// Route::post('/admin/education/update{id}', 'EducationPageController@update')->name('admin.education.update');
// Route::delete('/admin/education/destroy{id}', 'EducationPageController@destroy')->name('admin.education.destroy');
// Route::resource('/admin/education', 'EducationPageController');


// Route::get('/admin/skils/create', 'SkilsPageController@create')->name('admin.skils.create');
// Route::post('/admin/skils/create', 'SkilsPageController@store')->name('admin.skils.store');
Route::get('/admin/skils/list', 'BackEnd\SkilsPageController@list')->name('admin.skils.list');
// Route::get('/admin/skils/edit/{id}', 'SkilsPageController@edit')->name('admin.skils.edit');
// Route::post('/admin/skils/update{id}', 'SkilsPageController@update')->name('admin.skils.update');
// Route::delete('/admin/skils/destroy{id}', 'SkilsPageController@destroy')->name('admin.skils.destroy');
// Route::resource('/admin/skils', 'SkilsPageController');

Route::resources([
    '/admin/about' => 'BackEnd\AboutPageController',
    //'/admin/experience' => 'ExperiencePageController',
    '/admin/education' => 'BackEnd\EducationPageController',
    '/admin/skils' => 'BackEnd\SkilsPageController',
]);