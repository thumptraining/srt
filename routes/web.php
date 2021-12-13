<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SpeedController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\BeginnerController;
use App\Http\Controllers\IntermediateController;
use App\Http\Controllers\AdvanceController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('users', UserController::class)->names('admin.users');

Route::middleware(['auth:sanctum', 'verified'])->resource('weights', WeightController::class)->names('weights');

Route::middleware(['auth:sanctum', 'verified'])->resource('speeds', SpeedController::class)->names('speeds');

Route::middleware(['auth:sanctum', 'verified'])->resource('beginners', BeginnerController::class)->names('beginners');

Route::middleware(['auth:sanctum', 'verified'])->resource('intermediates', IntermediateController::class)->names('intermediates');

Route::middleware(['auth:sanctum', 'verified'])->resource('advances', AdvanceController::class)->names('advances');