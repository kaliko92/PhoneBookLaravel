<?php

use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;

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
    if (Auth::check()) {
        return redirect('admin/person');
    }
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::prefix('person')->group(function () {
        Route::get('/', [PersonController::class, 'index']);   
        Route::get('{id}', [PersonController::class, 'show']);
    });
    Route::prefix('profile')->group(function () {
        Route::get('/', [UserController::class, 'show']);   
    });
});
Auth::routes();

