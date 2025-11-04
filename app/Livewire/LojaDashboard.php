<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LojaDashboard extends Component
{

    public function logout()
{
    Auth::logout();
    return redirect()->route('login');
}

    public function render()
    {
        return view('livewire.loja-dashboard');
    }
}
