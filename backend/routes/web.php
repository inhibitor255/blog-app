<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);


// Admin Route
Route::get('admin/login', [AuthController::class, 'showLogin']);
Route::post('admin/login ', [AuthController::class, 'login']);
Route::group(['prefix ' => 'admin', 'namespace' => 'Admin', 'as' => 'admin'], function () {
});
