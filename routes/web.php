<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\User\UserDashboardController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Employee\EmployeeDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CaseController;
use App\Http\Controllers\User\FileUploadController;
use App\Http\Controllers\UserProfileController;
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

// Route::get('/', function () {
//     return view('Admin.Auth.login');
// });



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';


Route::middleware('user')->group(function () {
    Route::get('/', function () {
        return view('Admin.User.dashboard');
    });

    Route::get('/user-profile',[UserProfileController::class,'index']);
    Route::post('/store-profile',[UserProfileController::class,'store']);
    Route::post('/file-uploads',[FileUploadController::class,'upload']);
    Route::post('/create-case',[CaseController::class,'create_case']);
    Route::get('/case/get-cases',[CaseController::class,'getCaseList']);
    Route::get('/get-case-details/{id}',[\App\Http\Controllers\User\CaseController::class,'getDetails']);


});

Route::middleware('employee')->group(function () {
    Route::get('/employee-dashboard',[EmployeeDashboardController::class,'index']);
    Route::get('/get-assaigned-cases',[CaseController::class,'assaigned_cases']);

});

Route::middleware('Admin')->group(function () {
   Route::get('/admin-dashboard',[AdminDashboardController::class,'index']);
    Route::get('/user-management',[UserManagementController::class,'index']);
    Route::get('/get-user-list',[UserManagementController::class,'get_user_list']);
    Route::get('/edit/user-permissions/{id}',[UserManagementController::class,'edit']);
    Route::post('/update-user/{id}',[UserManagementController::class,'update']);

});
