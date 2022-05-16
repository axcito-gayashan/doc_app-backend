<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PatientController;
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
Route::middleware('auth:sanctum')->get('/admin', function (Request $request) {
    return $request->user();
});
Route::group([
    'prefix' => 'admin',
], function () {
    Route::post('/register', [AdminUserController::class, 'register']);
    Route::post('/login', [AdminUserController::class, 'login']);
    Route::post('/passwordUpdate', [AdminUserController::class, 'passwordUpdate']);
});
Route::group([
    'prefix' => 'patient',
], function () {
    Route::post('/register', [PatientController::class, 'register']);
    Route::post('/addNewPatient', [PatientController::class, 'addNewPatient']);
    Route::post('/updatePatient', [PatientController::class, 'updatePatient']);
    Route::post('/removePatient', [PatientController::class, 'removePatient']);
    Route::get('/getAllPatient', [PatientController::class, 'getAllPatient']);
    Route::post('/getPatientByPhone', [PatientController::class, 'getPatientByPhone']);
    Route::post('/getPatientDetails', [PatientController::class, 'getPatientDetails']);
    Route::post('/addPatientDailyStatus', [PatientController::class, 'addPatientDailyStatus']);
    Route::get('/getPatientDailyStatus', [PatientController::class, 'getPatientDailyStatus']);
    Route::post('/addWeightLoseGoalDetails', [PatientController::class, 'addWeightLoseGoalDetails']);
    Route::post('/getWeightLoseGoalDetailsByMobileNumber', [PatientController::class, 'get0WeightLoseGoalDetailsByMobileNumber']);
    Route::post('/addDoctorRecommendation', [PatientController::class, 'addDoctorRecommendation']);
    Route::post('/getPreviousRecommendationByMobileNumber', [PatientController::class, 'getPreviousRecommendationByMobileNumber']);
    Route::post('/getDailyStatus', [PatientController::class, 'getDailyStatus']);
    Route::post('/editPatientByMobileNumber', [PatientController::class, 'editPatientByMobileNumber']);

});
