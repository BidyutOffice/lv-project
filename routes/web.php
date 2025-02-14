<?php

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\ClientPagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// client routes
Route::get("/", [ClientPagesController::class, "index"])->name("client.dashboard");
Route::get("/products", [ClientPagesController::class, "products"])->name("client.products");

// admin routes
Route::prefix("admin")->group(function () {
    Route::get("/", [AdminPagesController::class, "index"])->name("admin.dashboard");
    Route::get("/users", [AdminPagesController::class, "users"])->name("admin.users");
    Route::get("/products", [AdminPagesController::class, "products"])->name("admin.products");
});
