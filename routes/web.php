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

use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::group([
    'middleware' => 'set_locale',
], function () {
    Route::get('locale/{locale}', 'PageController@changeLocale')->name('locale');

    Route::get('/', 'PageController@main')->name('main');
});

Route::middleware('auth')->group(function () {

    Route::group([
        'namespace' => 'User',
        'prefix' => 'user',
    ], function () {
        Route::get('/home', 'HomeUserController@index')->name('userHome');

        Route::get('/all-courses', 'CoursesController@index')->name('userCourses');

        Route::get('/my-courses', 'CoursesController@userEnrolledCourses')->name('userEnrolledCourses');

        Route::get('/course/{id}', 'CoursesController@show')->name('userCourseShow');

        Route::get('/enrolled-course/{id}', 'CoursesController@userShowEnrolledCourse')->name('userShowEnrolledCourse');

        Route::post('/course/{course}', 'CoursesController@enroll')->name('userCourseEnroll');

        Route::get('/lesson/{id}', 'LessonsController@show')->name('userLessonShow');

        Route::post('/lesson/{lesson}', 'LessonsController@getAnswers')->name('userGetAnswers');
    });

    Route::group([
        'middleware' => 'is_admin',
    ], function () {

        Route::group([
            'namespace' => 'Admin',
            'prefix' => 'admin',
        ], function () {
            Route::get('/home', 'HomeAdminController@index')->name('adminHome');

            Route::resource('users', 'UserController');

            Route::resource('courses', 'CourseController');

            Route::resource('lessons', 'LessonController');

            Route::resource('questions', 'QuestionController');

            Route::resource('answers', 'AnswerController');
        });

    });

});


