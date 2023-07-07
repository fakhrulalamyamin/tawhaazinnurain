<?php

use App\Http\Controllers\AllCourses;
use App\Http\Controllers\CourseCondactController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MyCoursesController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/larning-path', function () {
    return view('larning-path');
});

Route::get('/all-courses', [AllCourses::class, 'courses'])->name('courses');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //all pages
    Route::get('/my-profile', [MyProfileController::class, 'profile'])->name('my-profile');
    Route::get('/my-courses', [MyCoursesController::class, 'my_courses'])->name('my-courses');
    Route::get('/forum', [ForumController::class, 'forum'])->name('forum');
    Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
    Route::get('/setting', [SettingsController::class, 'setting'])->name('settings');
    Route::get('/course-condact', [CourseCondactController::class, 'condact'])->name('course.condact');
});

require __DIR__.'/auth.php';
