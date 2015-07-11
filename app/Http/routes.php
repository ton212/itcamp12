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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


// Backend Routes

Route::controllers([
	'backend/auth' => 'Backend\AuthController',
]);

Route::group(['middleware' => 'isAdmin'], function()
{
	Route::resource('backend', 'Backend\DashboardController', ['only' => ['index']]);
	Route::resource('backend/applicant', 'Backend\ApplicantController', ['except' => ['create', 'store']]);
	Route::get('backend/applicant/{applicant}/quiz', ['uses' => 'Backend\QuizController@show', 'as' => 'backend.applicant.quiz']);
	Route::get('backend/quiz', ['uses' => 'Backend\QuizController@index', 'as' => 'backend.quiz.index']);
});