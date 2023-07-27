<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/

// Route::get('/', function () {
//     return view('welcome');
// });

//DISPLAY THE USER DETAILS
Route::get('/user_details_uri', [UserRegisterController::class,'show_user_details']);

//STORE USER DETAILS
Route::post('/store_user_details', [UserRegisterController::class,'store_user_details_method']);

Route::view('customer_display_uri','customer_details.customer_details_display');


