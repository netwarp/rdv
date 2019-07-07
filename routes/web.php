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

    Route::post('rate', ['as' => 'front.postRate', 'uses' => 'FrontController@postRate']);

    Route::get('crypto-monnaies', ['as' => 'front.getCurrencies', 'uses' => 'FrontController@getCurrencies']);
    Route::get('outils', ['as' => 'front.getTools', 'uses' => 'FrontController@getTools']);
    Route::get('cours', ['as' => 'front.getCurves', 'uses' => 'FrontController@getCurves']);
    Route::get('conditions-generales-utilisations', ['as' => 'front.cgu', 'uses' => 'FrontController@getCgu']);
    Route::get('a-propos', ['as' => 'front.about', 'uses' => 'FrontController@getAbout']);

    Route::get('contact', ['as' => 'front.contact', 'uses' => 'FrontController@getContact']);
    Route::post('contact', ['as' => 'front.postContact', 'uses' => 'FrontController@postContact']);

    Route::get('blog', ['as' => 'front.blog.index', 'uses' => 'BlogController@getIndex']);
    Route::get('blog/{post}', ['as' => 'front.blog.post', 'uses' => 'BlogController@getPost']);
    Route::get('blog/tag/{tag}', ['as' => 'front.blog.getTag', 'uses' => 'BlogController@getTag']);

    Route::post('blog/post/{id}', ['as' => 'front.blog.postComment', 'uses' => 'BlogController@postComment']);

    Route::get('api', ['as' => 'front.api', 'uses' => 'FrontController@getApi']);

    Route::get('/test', 'FrontController@test');

});
Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function() { Auth::logout(); return redirect('/'); });

Route::group(['prefix' => 'admin' ,'namespace' => 'Admin', 'middleware' => ['auth', 'isAdmin'], 'as' => 'admin.'], function() {
    Route::get('/', ['as' => 'admin.getIndex', 'uses' => 'AdminController@getIndex']);

    Route::resources([
        'users' => 'UsersController',
        'ads' => 'AdsController',
        'posts' => 'PostsController',
        'comments' => 'CommentsController',
        'messages' => 'MessagesController',
    ]);

    Route::get('settings', ['as' => 'settings.index', 'uses' => 'SettingsController@index']);
    Route::post('settings', ['as' => 'settings.postIndex', 'uses' => 'SettingsController@postSettings']);
});


Route::group(['prefix' => 'profil', 'namespace' => 'Profil', 'middleware' => ['auth'], 'as' => 'profil.'], function () {
    Route::get('/', ['as' => 'user.getIndex', 'uses' => 'ProfilController@getIndex']);

    Route::resources([
        'annonces' => 'AdsController'
    ]);

    Route::get('notations', ['as' => 'user.getRates', 'uses' => 'RatesController@getIndex']);

    Route::get('parametres', ['as' => 'user.getSettings', 'uses' => 'SettingsController@getIndex']);
    Route::post('parametres', ['as' => 'user.postSettings', 'uses' => 'SettingsController@postIndex']);

});

Route::get('/images/{folder}/{file}', function($folder, $file) {
    $path = storage_path("app/images/{$folder}/{$file}");
    if (! File::exists($path)) {
        return;
    }

    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header('Content-Type', $type);
    return $response;
});