<?php

use App\Livewire\Auth\Login;
use App\Livewire\LojaDashboard;
use App\Livewire\Movimentacao;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use App\Livewire\Produto\Cadastro;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Login::class)->name('login');

Route::get('/dashboard', LojaDashboard::class)->name('dashboard');

Route::get('/produtos/cadastro', Cadastro::class)->name('produtos.cadastro')->middleware('auth');

Route::get('/movimentacaos', MovimentacaoIndex::class)->name('movimentacaos.index')->middleware('auth');