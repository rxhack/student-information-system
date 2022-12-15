<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/add-student'            ,[StudentController::class,'addStdShow']);
Route::post('/add-student-post'      ,[StudentController::class,'addStudent']);
Route::get('/view-student'           ,[StudentController::class,'allStudent'])->name('allStd');
Route::get('/edit-student/{Id}'      ,[StudentController::class,'editStudent']);
Route::post('/update-student/{Id}'   ,[StudentController::class,'updateStudent']);
Route::get('/del-student/{Id}'       ,[StudentController::class,'deleteStudent']);