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

/*-------------------------------- Unauthenticated group -------------------------------------------*/



Route::get('/', array(

    'before' => 'guest',
    'as' => 'login',
    'uses' => 'UserAuthenticationController@getLogin'

));

Route::post('user-login', array(


    'as' => 'login-post',
    'uses' => 'UserAuthenticationController@postLogIn'

));


Route::get('user-register', array(

    'before' => 'guest',
    'as' => 'signup',
    'uses' => 'UserAuthenticationController@getSignUp'

));

Route::post('user-register', array(

    'before' => 'guest',
    'as' => 'signup-post',
    'uses' => 'UserAuthenticationController@postSignUp'

));

Route::get('role-details', array(

    'before' => 'guest',
    'as' => 'role-details',
    'uses' => 'UserAuthenticationController@getRoleDetails'

));

/*------------------------------------ Authenticated Group ------------------------------------------------------------------------*/
/*--------------------------------------------------------- Admin dashboard Routes ------------------------------------------------*/

Route::get('sign-out', array(

    'as' => 'sign-out',
    'uses' => 'UserAuthenticationController@getSignOut'
));

/* --------------------------------------- teacher menu routes ---------------------------------------*/

Route::get('admin/add-teacher', array(

    'as' => 'add-teacher-form',
    'uses' => 'AdminController@getAddTeacher'
));

Route::post('admin/add-teacher', array(

    'as' => 'add-teacher-form-post',
    'uses' => 'AdminController@postAddTeacher'
));

Route::get('admin/add-teacher-details', array(

    'as' => 'add-teacher-details',
    'uses' => 'AdminController@getAddTeacherDetails'
));

Route::post('admin/add-teacher-details', array(

    'as' => 'add-teacher-details-post',
    'uses' => 'AdminController@postAddTeacherDetails'
));

/* --------------------------------------- student menu routes ---------------------------------------*/

Route::get('admin/add-student', array(

    'as' => 'add-student-form',
    'uses' => 'AdminController@getAddStudents'
));

Route::post('admin/add-student', array(

    'as' => 'add-student-form-post',
    'uses' => 'AdminController@postAddStudents'
));

Route::get('admin/add-student-details', array(

    'as' => 'add-student-details',
    'uses' => 'AdminController@getAddStudentDetails'
));

Route::post('admin/add-student-details', array(

    'as' => 'add-student-details-post',
    'uses' => 'AdminController@postAddStudentDetails'
));



/* --------------------------------------- course menu routes ---------------------------------------*/

Route::get('admin/add-course', array(

    'as' => 'add-course',
    'uses' => 'AdminController@getAddCourses'
));

Route::post('admin/add-course', array(

    'as' => 'add-course-post',
    'uses' => 'AdminController@postAddCourses'
));



/*--------------------------------------------------------- Student dashboard Routes ------------------------------------------------*/

Route::get('student/student-profile', array(

    'as' => 'student-profile',
    'uses' => 'StudentController@getProfile'
));

/* ------------------------------------------------ dashboard tab routs GET --------------------------------*/


Route::get('admin-dashboard', array(

    'as' => 'admin-view',
    'uses' => 'AdminDashboardController@getAdminDashboard'
));

Route::get('student-dashboard', array(

    'as' => 'student-view',
    'uses' => 'StudentDashboardController@getStudentDashboard'
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
