<?php

use App\Http\Controllers\Cms\AuthController;
use App\Http\Controllers\Cms\CameraController;
use App\Http\Controllers\Cms\NotificationController;
use App\Http\Controllers\Cms\ObjectDetectionController;
use Illuminate\Support\Facades\Auth;
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
Route::get('dang-nhap', function(){
    if (Auth::check()) {
        return redirect()->route('home');
    } else {
        return view('auth.login');
    }
})->name('login');

Route::post('/dang-nhap', [AuthController::class, 'login'])->name('login');
Route::get('/dang-xuat', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', [CameraController::class, 'index'])->name('home');
    Route::prefix('thong-bao')->name('notification.')->group(function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
    });
    
    Route::prefix('doi-tuong')->name('detection.')->group(function () {
        Route::post('/them-moi', [ObjectDetectionController::class, 'create'])->name('create');
        Route::get('/doc-thong-bao', [ObjectDetectionController::class, 'readNotification'])->name('readNotification');
    });
});