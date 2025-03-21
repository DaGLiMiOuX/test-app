<?php

use App\Http\Controllers\PageArray\PageController;
use App\Http\Controllers\RelationPage\RelationPageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('page', PageController::class)
    ->only(['index', 'show', 'update']);
Route::get('/page/sections/{page}', [PageController::class, 'sections'])
    ->name('page.sections');

Route::resource('relations-page', RelationPageController::class)
    ->only(['index', 'show', 'update']);