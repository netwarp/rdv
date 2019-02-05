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

Route::group(['namespace' => 'Front'], function() {
    Route::get('/', ['as' => 'front.home', 'uses' => 'FrontController@getIndex']);

    Route::get('deposer-annonce', ['as' => 'front.getPlaceAd', 'uses' => 'FrontController@getPlaceAd']);
    Route::post('deposer-annonce', ['as' => 'front.postPlaceAd', 'uses' => 'FrontController@postPlaceAd']);

    Route::get('offres', ['as' => 'front.getOffers', 'uses' => 'FrontController@getOffers']);

    Route::get('demandes', ['as' => 'front.getRequests', 'uses' => 'FrontController@getRequests']);

    Route::get('annonce/{id}/{slug}', ['as' => 'front.getAd', 'uses' => 'FrontController@getAd']);

    Route::get('utilisateur/{name}', ['as' => 'front.getProfil', 'uses' => 'FrontController@getUser']);
});

/*
Route::get('/', function () {
    return view('front.index');
});

Route::get('deposer-annonce', function () {
    return view('front.placeAd');
});

Route::get('offres', function () {
    return view('front.ads');
});

Route::get('demandes', function () {
    return view('front.ads');
});

Route::get('cours', function () {
    return view('front.curves');
});

Route::get('blog', function () {
    return view('front.blog');
});

Route::get('api', function () {
    return view('front.api');
});
*/

