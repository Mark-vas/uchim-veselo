<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\LessonController as AdminLessonController;
use App\Http\Controllers\Admin\CourseReviewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

/*Route::get('/home', [HomeController::class, 'index'])->name('home');*/


Route::group(['as' => 'admin.', 'prefix' => 'admin'], function() {
    Route::view('/', 'admin.index')->name('index');

    Route::resource('/course',AdminCourseController::class);
    Route::get('/course/destroy/{course}', [AdminCourseController::class, 'destroy'])
	->where('course', '\d+')
	->name('course.destroy');
    Route::resource('/lesson',AdminLessonController::class);
    Route::get('/lesson/destroy/{lesson}', [AdminLessonController::class, 'destroy'])
	->where('lesson', '\d+')
	->name('lesson.destroy');
    Route::resource('/courseReview',CourseReviewController::class);
    Route::get('/review/destroy/{courseReview}', [CourseReviewController::class, 'destroy'])
	->where('courseReview', '\d+')
	->name('review.destroy');

});


Route::get('/',[CourseController::class,'index'])
->name('course.index');

Route::get('course/{course}',[CourseController::class, 'show'])
->where('course', '\d+')
->name('course.show');


/*Route::get('/lesson',[LessonController::class,'index'])
->name('lesson.index');*/

Route::get('lesson/{lesson}',[LessonController::class, 'show'])
->where('lesson', '\d+')
->name('lesson.show');
