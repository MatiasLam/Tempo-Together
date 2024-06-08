<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\SearchController;

/* Auth */
Route::post('register', [AuthController::class, 'register']);
Route::post('register-band', [AuthController::class, 'registerBand']); 
Route::post('login', [AuthController::class, 'login']);
Route::post('add-members-band', [AuthController::class, 'addMembersBand']);


/* Requests */
Route::post('add-request', [RequestController::class, 'addRequest']);
Route::post('get-request-by-distance', [RequestController::class, 'getRequestByDistance']);
Route::post('get-request-order-distance', [RequestController::class, 'getRequestsOrderDistance']);

/* Concerts */
Route::post('add-concert', [ConcertController::class, 'addConcert']);
Route::post('get-concert-by-distance', [ConcertController::class, 'getConcertByDistance']);
Route::post('get-concert-order-distance', [ConcertController::class, 'getConcertsOrderDistance']);


/* Intruments */
Route::get('get-instruments', [InstrumentController::class, 'getInstruments']);
Route::post('add-instruments-user', [InstrumentController::class, 'addInstrumentUser']);
Route::get('get-instruments-user', [InstrumentController::class, 'getInstrumentsUser']);

/* Search */
Route::get('search', [SearchController::class, 'searchUserBands']);
Route::get('get-user', [SearchController::class, 'getUserDetails']);
Route::get('get-band', [SearchController::class, 'getBandDetails']);
Route::get('get-band-members', [SearchController::class, 'getBandMembers']);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
