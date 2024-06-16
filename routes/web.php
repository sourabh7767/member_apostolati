<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Route::middleware('prevent-back-history')->group(function () {

    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');

        return Redirect::back()->with('success', 'All cache cleared successfully.');
    });

    Route::prefix('admin')->group(function () {
        Auth::routes();
    });
    
    Route::get('/forbidden', 'Auth\LoginController@forbidden')->name('forbidden');
    Route::any('user/signup', 'User\AuthController@signup')->name('user.signup');
    Route::any('user/login', 'User\AuthController@login')->name('user.login');
    Route::get('user/forgetPassword', 'User\AuthController@forgetPassword')->name('user.forgetPassword');
    Route::post('forget-password', 'User\AuthController@submitForgetPasswordForm')->name('forget.password.post');
    Route::get('change/password/{token}', 'User\AuthController@showResetPasswordForm')->name('reset.password.get'); 
    Route::post('reset-password', 'User\AuthController@submitResetPasswordForm')->name('reset.password.post');
    Route::any('user/verifyOtp', 'User\AuthController@verifyOtp')->name('user.verifyOtp');
    
    Route::get('clubList', 'User\AuthController@clubList')->name('clubList');

    Route::middleware(['auth', 'CheckRoleAdmin'])->group(function () {

        Route::get('/admin/dashboard', 'HomeController@index')->name('admin.home');
        Route::resource('users', 'Admin\UserController');
        Route::resource('role', 'Admin\RoleController');
        Route::get('/admin/changeStatus/{id}', 'Admin\UserController@changeStatus')->name('admin.changeStatus');
        Route::get('admin/profile', 'Admin\UserController@profile')->name('admin.profile');
        Route::get('admin/update-profile', 'Admin\UserController@showUpdateProfileForm')->name('admin.updateProfile');
        Route::post('admin/update-profile/submit', 'Admin\UserController@updateProfile')->name('admin.updateProfile.submit');
        Route::get('admin/change-password', 'Admin\UserController@changePasswordView')->name('admin.changePassword');
        Route::post('admin/change-password/submit', 'Admin\UserController@changePassword')->name('admin.changePassword.submit');

        Route::resource('page', 'Admin\PageController');
        Route::post('upload', 'Admin\PageController@upload')->name('upload');
        Route::resource('clubs', 'Admin\ClubController');
    });

    Route::middleware(['auth', 'CheckRoleUser'])->group(function () {
        Route::get('/', 'User\ClubManagementController@index')->name('landingPage');
        Route::prefix('user')->group(function () {
            Route::resource('club', 'User\ClubManagementController');
            Route::get('/logout', 'User\AuthController@logout')->name('user.logout');
        });
    });
});