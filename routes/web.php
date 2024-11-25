<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/dashboard', [DasboardController::class,'dashboard'])->name('dashboard');
Route::get('/dashboard/newrule', [DasboardController::class,'newrule'])->name('newrule');
Route::get('/dashboard/activerules', [DasboardController::class,'activerules'])->name('activerules');
Route::get('/dashboard/modifyrule', [DasboardController::class,'modifyrule'])->name('modifyrule');

