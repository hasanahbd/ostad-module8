<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Cookie;
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
Route::get('/profile/{id}', [ProfileController::class, 'index']);

Route::get('/rc', function () {
    // Create a cookie
    $cookie = Cookie::make('access_token', '123-XYZ', 1, '/', null, false, true);

    // Return a response with the cookie attached
    return response('The cookie has been set.')->cookie($cookie);
});
