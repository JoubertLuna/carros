<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

#Route Site Index
Route::get('/', [SiteController::class, 'index'])->name('index_site');
#Route Site Index