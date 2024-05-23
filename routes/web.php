<?php

use App\Models\Avis;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function (){
    $avis = Avis::with('user')->orderBy('created_at', 'DESC')->get();
    return view('app', compact('avis'));
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
require __DIR__.'/auth.php';
