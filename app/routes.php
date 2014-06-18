<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/about-company', array('as'=>'about-company', 'uses'=>'SiteController@getAboutcompany'));
Route::get('/chairman-message', array('as'=>'chairman-message', 'uses'=>'SiteController@getChairmanmessage'));
Route::get('/who-can-join-us', array('as'=>'who-can-join-us', 'uses'=>'SiteController@getWhocanjoinus'));
Route::get('/success-plan', array('as'=>'success-plan', 'uses'=>'SiteController@getSuccessplan'));
Route::get('/be-your-boss', array('as'=>'be-your-boss', 'uses'=>'SiteController@getBeyourboss'));
Route::get('/dreams-goals', array('as'=>'dreams-goals', 'uses'=>'SiteController@getDreamsgoals'));
Route::get('/about-the-industry', array('as'=>'about-the-industry', 'uses'=>'SiteController@getAbouttheindustry'));
Route::get('/our-trategy', array('as'=>'our-trategy', 'uses'=>'SiteController@getOurstrategy'));
Route::get('/certifications', array('as'=>'certifications', 'uses'=>'SiteController@getCertifications'));
Route::get('/code-of-ethics', array('as'=>'code-of-ethics', 'uses'=>'SiteController@getCodeofethics'));
Route::get('/photo-gallery', array('as'=>'photo-gallery', 'uses'=>'SiteController@getPhotogallery'));
Route::get('/', array('as'=>'home', 'uses'=>'SiteController@getIndex'));
