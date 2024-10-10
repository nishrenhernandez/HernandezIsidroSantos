<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolsController;

// Route::get('/handson', function () {
    // return view('handson');
// });

Route::get('/handson',[SchoolsController::class,'handson'])->name('Schools.handson');
Route::post('/Schools/store',[SchoolsController::class,'store'])->name('Schools.store');
