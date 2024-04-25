<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;

// rota vendedor
Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])
    ->middleware(['auth', 'vendor'])
    ->name('vendor.dashboard');
