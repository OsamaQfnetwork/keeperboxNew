<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\becomeProviderController;
use App\Http\Controllers\findProviderController;
use App\Http\Controllers\for_parentsController;
use App\Http\Controllers\for_schoolController;
use App\Http\Controllers\getStartedController;
use App\Http\Controllers\how_worksController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\keeperboxController;
use App\Http\Controllers\signin_oldController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\userDashboardController;

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

Route::get('/', [indexController::class, 'Index']);
Route::get('/aboutus', [aboutusController::class, 'About']);
Route::get('/becomeProvider', [becomeProviderController::class, 'BProvider']);
Route::get('/findprovider', [findProviderController::class, 'FProvider']);
Route::get('/for_parents', [for_parentsController::class, 'Parents']);
Route::get('/for_school', [for_schoolController::class, 'School']);
Route::get('/getStarted', [getStartedController::class, 'GetStarted']);
Route::get('/how_works', [how_worksController::class, 'How_works']);
Route::get('/keeperbox', [keeperboxController::class, 'Keeper']);
Route::get('/signin_old', [signin_oldController::class, 'Sign_old']);
Route::get('/signin', [signinController::class, 'Signin']);
Route::get('/signup', [signupController::class, 'Signup']);
Route::get('/userDashboard', [userDashboardController::class, 'UserDashboard']);
