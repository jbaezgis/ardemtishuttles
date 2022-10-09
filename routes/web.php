<?php

use App\Http\Controllers\PlacesController;
use App\Http\Livewire\About;
use App\Http\Livewire\Admin\Municipalities;
use App\Http\Livewire\Admin\Places;
use App\Http\Livewire\Admin\Provinces;
use App\Http\Livewire\Cookies;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Help;
use App\Http\Livewire\PrivacyPolicy;
use App\Http\Livewire\TermsConditions;

// Public routes
Route::get('/', Home::class)->name('home');
Route::get('about', About::class)->name('about');
Route::get('help', Help::class)->name('help');
Route::get('privacy', PrivacyPolicy::class)->name('privacy');
Route::get('terms', TermsConditions::class)->name('terms');
Route::get('cookies', Cookies::class)->name('cookies');

//Clients routes 

// Administration routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    // Admin
    Route::get('provinces', Provinces::class)->name('provinces');
    Route::get('municipalities', Municipalities::class)->name('municipalities');

    // Admin.Places
    Route::get('places', Places::class)->name('places');
    // Route::get('places/{id}', [PlacesController::class, 'show'])->name('places.show');
    // Route::get('places/create', [PlacesController::class, 'create'])->name('places.create');
    // Route::post('places/store', [PlacesController::class, 'store'])->name('places.store');
    // Route::get('places/{id}/edit', [PlacesController::class, 'edit'])->name('places.edit');
    // Route::patch('places/{id}', [PlacesController::class, 'update'])->name('places.update');
    // Route::delete('places/{id}', [PlacesController::class, 'destroy'])->name('places.destroy');

});

// Suppliers routes


