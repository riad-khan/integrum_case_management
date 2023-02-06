<?php

use App\Http\Controllers\User\CaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/assign-case',[CaseController::class,'assign_case_api']);
Route::post('/update-case-file-list/{id}',[CaseController::class,'update_case_file_list']);
Route::get('/case-files/{page}/{user_id}',[CaseController::class,'get_uploaded_files']);
Route::get('/edit-case-details/{id}',[CaseController::class,'edit_case_details_api']);
Route::post('/update-case-details/{id}',[CaseController::class,'update_case_details_api']);
Route::get('/case-details-employee/{id}',[CaseController::class,'case_details_employee']);



