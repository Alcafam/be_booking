<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\BookingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('register', 'register');
        Route::get('logout', 'logout')->middleware('auth:sanctum');
    });
});

/* EVENT RELATED ROUTES */
Route::group(['prefix' => 'events', 'middleware' => 'auth:sanctum'], function () {
    Route::controller(EventController::class)->group(function () {
        Route::get('event_list', 'event_list');
        Route::get('event_by_id/{id}', 'event_by_id');
        Route::get('check_if_deletable/{id}', 'check_if_deletable');
        Route::post('add_event', 'add_event');
        Route::put('update_event/{id}', 'update_event');
        Route::delete('delete_event/{id}', 'delete_event');
    });
});

/* BOOKING RELATED ROUTES */
Route::group(['prefix' => 'bookings', 'middleware' => 'auth:sanctum'], function () {
    Route::controller(BookingController::class)->group(function () {
        Route::get('get_bookings_by_id/{id}', 'booking_by_id');
        Route::post('book_event/{id}', 'book_event');
        Route::delete('delete_booking/{id}', 'delete_booking');
    });
});