<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Models\Newuser;
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
//     return view('userlist');
// });


//list

Route::get('/',[UserController::class,'list']);
Route::get('/userlist',[UserController::class,'list']);

//add
Route::get('/addfield',[UserController::class,'index']);
Route::post('/addfield',[UserController::class,'create']);
//edit
Route::get('editfield/{id}',[UserController::class,'edit']);
Route::put('update/{id}',[UserController::class,'update']);
//delete
Route::get('delete/{id}',[UserController::class,'delete']);
//search
Route::get('search',[UserController::class,'search']);
