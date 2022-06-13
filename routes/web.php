<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/test', [BlogController::class, 'index']);

Route::post('/post', [BlogController::class, 'store']);

Route::get('/getdata', [BlogController::class, 'show'])->name("getdata");

Route::get("/delete/{id}", [BlogController::class, 'deleterecord'])->name("deletedata");

Route::get('editdata', [BlogController::class, 'updateform'])->name("editdata");
Route::get('postdata/{id}', [BlogController::class, 'showdata']);
Route::post("savedata", [BlogController::class, 'postdata'])->name('update-blog-data');
// Route::post('/postdata/{id}', [BlogController::class], 'postdata')->name('postdata');
