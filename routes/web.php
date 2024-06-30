<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [ItemController::class, 'index'])->middleware('auth')->name('index');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Adding routes for Item
Route::get('/items/create', [ItemController::class, 'create'])->middleware('auth');
Route::post('/items', [ItemController::class, 'store'])->name('items.store')->middleware('auth');
Route::get('/items', [ItemController::class, 'simple_list'])->name('items.simple_list');


Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/seemore/{id}', [ItemController::class, 'show'])->middleware('auth');



Route::post('/seemore/{id}', [BidController::class, 'store'])->middleware('auth')->name('bid.store');

Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::get('/search/results', 'SearchController@results')->name('search.results');

Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('items.destroy');



// Feedback routes
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');

Route::get('/feedbacks/show-success', function () {
    return view('feedbacks.show-success');
})->name('feedbacks.show-success');






