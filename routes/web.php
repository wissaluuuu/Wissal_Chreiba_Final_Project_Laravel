<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EspaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('firstPage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/calendar", [CalendarController::class, "index"])->name("home.calendar"); 
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/espace' , [ProjectController::class ,'store'])->name('espace.store');
Route::post('/tache' , [TacheController::class ,'store'])->name('tache.store');
Route::get('/espaceTravail' , [ProjectController::class ,'index'])->name('espace.index');
Route::post("/calendar/store" , [CalendarController::class , "store"]);
Route::get("/calendar/show" , [CalendarController::class , "show"]);
require __DIR__.'/auth.php';
Route::get("/Projects",[ProjectController::class , "show"])->name('espace.show');
