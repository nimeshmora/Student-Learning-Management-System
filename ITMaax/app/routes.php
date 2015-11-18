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

Route::get('/', array(

    'before' => 'guest',
    'as' => 'login',
    'uses' => 'UserAuthenticationController@getLogin'

));



Route::get('summary', function()
{
	return View::make('course-summary');
});

Route::get('course-summary', array(

    'as' => 'summary',
    'uses' => 'CourseSummaryController@getDashboard'
));

Route::get('student-list', array(

    'as' => 'students',
    'uses' => 'StudentController@getStudent'
));

Route::get('student-grades', array(

    'as' => 'grades',
    'uses' => 'GradeController@getGrades'
));

Route::get('user-profile', array(

    'as' => 'profile',
    'uses' => 'ProfileController@getProfile'
));
