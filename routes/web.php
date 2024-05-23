<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/deleteuser', [ProfileController::class, 'delete'])->name('deleteuser');
    Route::get('/Edituser', [ProfileController::class, 'edituser'])->name('Edituser');
    Route::post('/Editpost', [ProfileController::class, 'editpost'])->name('Editpost');
    Route::get('/Showuserdetail', [ProfileController::class, 'showuserdetail'])->name('Showuserdetail');
    

});

require __DIR__.'/auth.php';
