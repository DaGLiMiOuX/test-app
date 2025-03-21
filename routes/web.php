<?php

use App\Http\Controllers\PageController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): View {
    return view('welcome');
});

Route::get('/controller/page/array/{pageArray}', [PageController::class, 'pageArray'])->name('page_array_controller');
Route::get('/controller/page/relation/{relationPage}', [PageController::class, 'relationPage'])->name('relation_page_controller');