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
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::get('forms', 'HomeController@forms');
Route::get('judges', 'HomeController@judges');

Route::get('vote', 'VoteController@index');
Route::post('vote', 'VoteController@cast');

/*Downloading forms*/
Route::get('download/yaa-ideas-research-development',function(){
    return Response::download('YAA1.pdf','Young Achievers Award - Ideas_Research_Development');
});
Route::get('download/yaa-entrepreneurship',function(){
    return Response::download('YAA2.pdf','Young Achievers Award - Entrepreneurship');
});
Route::get('download/miip',function(){
    return Response::download('MIIP.pdf','Most Innovative Insurance Product');
});
//Route::get('download/yaa-ideas-research-development',function(){
//    return Response::download('/YAA1.pdf','Young Achievers Award - Ideas_Research_Development');
//});
