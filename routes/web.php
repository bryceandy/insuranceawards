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

Route::get('/', 'HomeController@index');

/*voting*/
Route::get('vote', 'VoteController@index');
Route::post('vote', 'VoteController@cast');

/*nomination*/
Route::get('application-form', 'NominationController@viewApplication');
Route::post('apply', 'NominationController@apply');
Route::get('nomination-guidelines', 'NominationController@guidelines');
Route::get('nomination-categories/{name}', 'NominationController@viewCategory');

/*committee*/
Route::get('steering', 'HomeController@steering');
Route::get('judges', 'HomeController@judges');
Route::get('secretariat', 'HomeController@secretariat');

Route::get('shortlist', 'HomeController@shortlist');

/*sponsor*/
Route::get('sponsor', 'HomeController@sponsor');
Route::get('sponsorship', 'HomeController@sponsorship');

Route::get('faqs', 'HomeController@faqs');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');

