<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\User\UserDashboardController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Employee\EmployeeDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CaseController;
use App\Http\Controllers\User\FileUploadController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request as FacadesRequest;

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
    Route::get('/', function ($id = null) {

        $routeName= FacadesRequest::route()->getName();
        $type = in_array($routeName, ['user','group'])
            ? $routeName
            : 'user';

        return view('Admin.User.dashboard', [
            'id' => $id ?? 0,
            'type' => $type ?? 'user',
            'messengerColor' => Auth::user()->messenger_color ?? $this->messengerFallbackColor,
            'dark_mode' => Auth::user()->dark_mode < 1 ? 'light' : 'dark',
        ]);
      //  return view('Admin.User.dashboard');
    });

    Route::get('/user-profile',[UserProfileController::class,'index']);
    Route::post('/store-profile',[UserProfileController::class,'store']);
    Route::post('/file-uploads',[FileUploadController::class,'upload']);
    Route::post('/create-case',[CaseController::class,'create_case']);
    Route::get('/case/get-cases',[CaseController::class,'getCaseList']);
    Route::get('/get-case-details/{id}',[\App\Http\Controllers\User\CaseController::class,'getDetails']);
    Route::get('/user-case-delete/{id}',[\App\Http\Controllers\User\CaseController::class,'user_case_delete']);


});

Route::middleware('employee')->group(function () {
    Route::get('/employee-dashboard',[EmployeeDashboardController::class,'index']);
    Route::get('/get-assaigned-cases',[CaseController::class,'assaigned_cases']);
    Route::get('/case-edit/{id}',[CaseController::class,'edit_Case_Admin']);
    Route::post('/case-update/{id}',[CaseController::class,'update_Case_Admin']);
    Route::post('/case/delete/{id}',[CaseController::class,'case_delete']);

});

Route::middleware('Admin')->group(function () {
   Route::get('/admin-dashboard',[AdminDashboardController::class,'index']);
    Route::get('/user-management',[UserManagementController::class,'index']);
    Route::get('/get-user-list',[UserManagementController::class,'get_user_list']);
    Route::get('/edit/user-permissions/{id}',[UserManagementController::class,'edit']);
    Route::post('/update-user/{id}',[UserManagementController::class,'update']);
    Route::get('/create-user/',[UserManagementController::class,'create']);
    Route::post('/store-user',[UserManagementController::class,'store']);
    Route::get('/case-manage',[CaseController::class,'case_manage']);
    Route::get('/case-list',[CaseController::class,'Admin_case_list']);
   // Route::get('/case-edit/{id}',[CaseController::class,'edit_Case_Admin']);
   
    Route::get('/delete-user/{id}',[UserManagementController::class,'delete_user']);

});

Route::get('/run-queue', function () {
    exec('php artisan queue:work');
});
