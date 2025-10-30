<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email|max:100',
        'password' => 'required|min:6'
    ];

    protected $messagens = [
        'password.required' => 'Senha obrigatória',
        'password.min' => 'Mínimo de 6 caracteres',
        'email.required' => 'Email obrigatório',
        'email.max' => 'Máximo de 100 caracteres'
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->$email, 'password' => $this->$password])) {

            session()->regenerate();
        }

        if (Auth::user()) {
            return redirect()->route('dashboard');
        }

        session()->flash('error', 'Email ou senha incorretos');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
