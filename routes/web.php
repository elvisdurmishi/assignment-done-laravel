<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\Student\LoginController;
use App\Http\Controllers\Student\LogoutController;
use App\Http\Controllers\Student\RegisterController;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/classes', [ClassesController::class, 'index'])->name("classes");

Route::post("/logout", [LogoutController::class, 'store'])->name("logout");

Route::get("/login", [LoginController::class, 'index'])->name("login");
Route::post("/login", [LoginController::class, 'store']);

Route::get("/register", [RegisterController::class, 'index'])->name("register");
Route::post("/register", [RegisterController::class, 'store']);


Route::get('/assignments', function () {
    return view('assignments.index');
});
