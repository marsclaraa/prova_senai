<?php

use App\Livewire\Auth\Login;
use App\Livewire\LojaDashboard;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Login::class)->name('login');

Route::get('/dashboard', LojaDashboard::class)->name('dashboard');