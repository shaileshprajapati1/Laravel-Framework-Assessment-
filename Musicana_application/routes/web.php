<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome1');
});

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('checkRollid');

Route::prefix('admin')->group(function(){
    Route::view('/admindashboard',"admin.admindashboard");
    Route::view('/viewallusers',"admin.viewallusers");
    Route::get('/viewallusers',[App\Http\Controllers\userscontroller::class, 'index']);
    Route::any('/edituser/{cid}',[App\Http\Controllers\userscontroller::class, 'show']);
    Route::any('/updateusers/{cid}',[App\Http\Controllers\userscontroller::class, 'update']);
    Route::any('/deleteuser/{cid}',[App\Http\Controllers\userscontroller::class, 'destroy']);
    Route::any('/addmusic',[App\Http\Controllers\MusicsController::class, 'create']);
    Route::any('/savemusic',[App\Http\Controllers\MusicsController::class, 'store']);
    Route::any('/viewmusics',[App\Http\Controllers\MusicsController::class, 'show']);

});