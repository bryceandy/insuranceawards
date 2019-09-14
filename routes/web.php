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

Route::get('/', 'PagesController@index')->name('home');

/*voting*/
Route::get('vote', 'VoteController@index');
Route::post('vote', 'VoteController@cast');

/*nomination*/
//Route::get('application-form', 'NominationController@viewApplication');
//Route::post('apply', 'NominationController@apply');
//Route::get('nomination-guidelines', 'NominationController@guidelines');
//Route::get('nomination-categories/{name}', 'NominationController@viewCategory');

/*committee*/
Route::get('steering', 'PagesController@steering');
Route::get('judges', 'PagesController@judges');
Route::get('secretariat', 'PagesController@secretariat');

Route::get('shortlist', 'PagesController@shortlist');

/*sponsor*/
Route::get('sponsor', 'PagesController@sponsor');
Route::get('sponsorship', 'PagesController@sponsorship');

Route::get('faqs', 'PagesController@faqs');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('fill-nominees', 'PagesController@fillInDefaultNominees');

Auth::routes();

Route::get('dashboard', 'PagesController@dashboard');

Route::get('upgrade/user/{id}', 'AdminController@UpgradeToAdmin');
Route::get('delete/user/{id}', 'AdminController@deleteUser');
