<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Frontend Routes

Route::get('/', 'HomeController@index');
Route::get('register', ['uses' => 'RegisterController@create', 'as' => 'register.create']);
Route::post('register', ['uses' => 'RegisterController@store', 'as' => 'register.store']);


// Backend Routes

Route::controllers([
	'backend/auth' => 'Backend\AuthController',
]);

Route::group(['middleware' => 'isAdmin'], function()
{
	Route::resource('backend', 'Backend\DashboardController', ['only' => ['index']]);
    Route::controller('backend/applicant/{applicant}', 'Backend\ApplicantController');
	Route::resource('backend/applicant', 'Backend\ApplicantController', ['except' => ['create', 'store']]);
	Route::get('backend/scoring', ['uses' => 'Backend\ScoringController@index', 'as' => 'backend.scoring.index']);
	Route::get('backend/scoring/start/{applicant}', ['uses' => 'Backend\ScoringController@getScoring', 'as' => 'backend.scoring.start']);
    Route::post('backend/scoring/start/{applicant}', ['uses' => 'Backend\ScoringController@postScoring', 'as' => 'backend.scoring.save']);
	Route::resource('backend/question', 'Backend\QuestionController');
});

Route::resource('link-exchange', 'Backend\LinkExchangeController');