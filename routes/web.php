<?php

use App\Http\Controllers\SitioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssignmentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/contactForm/{codigo?}', [SitioController::class, 'contact']);
Route::post('/contactForm', [SitioController::class, 'saveMessage']);

route::get('/joinCourse', [UserController::class, 'joinForm']);
route::post('/join', [UserController::class, 'joinCourse']);

route::get('course/{id}/list', [CourseController::class, 'list']);


Route::resource('user', UserController::class);
Route::resource('course', CourseController::class);
Route::resource('assignment', AssignmentController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
