<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CrsController;
use App\Http\Controllers\API\CrsReviewController;
use App\Http\Controllers\API\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*************  И С Т О Р И И ************/

// список всех историй
Route::get('courses', [CrsController::class,'index'])->name('api.course.index');
// список всех глав и отзывы (надо доделать/переделать)
Route::get('courses/{course}', [CrsController::class,'show'])->name('api.course.show');


/*************  С Л А Й Д Е Р Ы ************/
// первый слайдер истории
Route::get('courses/first_slider/{course}', [CrsController::class,'show_first_slider']);
// последний слайдер истории
Route::get('courses/last_slider/{course}', [CrsController::class,'show_last_slider']);


/*************  Т Е С Т Ы ************/
// первый тест 
Route::get('courses/first_test/{course}', [CrsController::class,'first_test']);
// второй тест 
Route::get('courses/second_test/{course}', [CrsController::class,'second_test']);



/*************  ОТЗЫВЫ ************/
// отзывы на главной
Route::get('course_reviews', [CrsReviewController::class,'index']);
// отдельный отзыв к истории
Route::get('course_reviews/{course_review}', [CrsReviewController::class,'show']);
// добавление отдельного отзыва к истории
Route::post('course_reviews', [CrsReviewController::class,'store']);
// редактирование отдельного отзыва
Route::put('course_reviews/{course_review}', [CrsReviewController::class,'update']);
// удаление отдельного отзыва
Route::delete('course_reviews/{course_review}', [CrsReviewController::class,'destroy']);

//слайдеры 
// Route::get('lesson/{lesson}', [TestController::class,'show_first_test']);
