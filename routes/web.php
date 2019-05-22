<?php
use \Illuminate\Support\Facades\Response;
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

Route::get('forms', 'HomeController@forms');

/*committee*/
Route::get('steering', 'HomeController@steering');
Route::get('judges', 'HomeController@judges');
Route::get('secretariat', 'HomeController@secretariat');

Route::get('shortlist', 'HomeController@shortlist');

/*sponsor*/
Route::get('sponsor', 'HomeController@sponsor');
Route::get('sponsorship', 'HomeController@sponsorship');

Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');



/*Downloading forms*/
Route::get('download/yaa-ideas-research-development',function(){
    return Response::download('YAA1.pdf','Young Achievers Award - Ideas_Research_Development.pdf');
});
Route::get('download/yaa-entrepreneurship',function(){
    return Response::download('YAA2.pdf','Young Achievers Award - Entrepreneurship.pdf');
});
Route::get('download/miip',function(){
    return Response::download('MIIP.pdf','Most Innovative Insurance Product.pdf');
});
Route::get('download/insurance-brokerage-of-the-year',function(){
    return Response::download('IBOY.pdf','Insurance Brokerage of the Year.pdf');
});
Route::get('download/insurance-company-of-the-year',function(){
    return Response::download('ICOY.pdf','Insurance Company of the Year.pdf');
});
Route::get('download/insurance-awareness-campaign-of-the-year',function(){
    return Response::download('IACOY.pdf','Insurance Awareness Campaign of the Year.pdf');
});
Route::get('download/corporate-social-responsibility-award',function(){
    return Response::download('CSRA.pdf','Corporate Social Responsibility Award.pdf');
});
