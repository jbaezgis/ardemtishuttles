<?php

use App\Http\Livewire\About;
use App\Http\Livewire\Admin\Municipalities;
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
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Administration
    Route::get('provinces', Provinces::class)->name('provinces');
    Route::get('municipalities', Municipalities::class)->name('municipalities');
});

// Suppliers routes


