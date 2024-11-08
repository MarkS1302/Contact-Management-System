<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


//Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
//Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
//Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
//Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
//Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::resource('contacts', ContactController::class);