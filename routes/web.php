<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\TickketController;
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

Route::get('/', [DemoController::class, 'helloworld']);
Route::get('/data-handle/{id}/path', [DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string', [DataHandleController::class, 'handleQueryString']);
Route::get('/data-handle/form', [DataHandleController::class, 'handleForm']);
Route::post('/data-handle/form', [DataHandleController::class, 'processForm']);

Route::get('admin/layout/home', [LayoutController::class, 'getLayout']);
Route::get('admin/layout/form', [LayoutController::class, 'getForm']);
Route::get('admin/layout/table', [LayoutController::class, 'getTable']);

Route::post('admin/layout/form', [LayoutController::class, 'formProcess']);


Route::resource('tickkets' , TickketController::class);
