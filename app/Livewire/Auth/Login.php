<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $nome;
    public $email;
    public $password;

    protected $rules = [
        'nome' => 'required',
        'email' => 'required|email|max:100',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required' => 'Nome Incorreto',
        'password.required' => 'Senha Incorreta',
        'password.min' => 'Mínimo de 6 caracteres',
        'email.required' => 'Email Incorreto',
        'email.max' => 'Máximo de 100 caracteres'
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
        }

        if (Auth::user()) {
            return redirect()->route('dashboard');
        } else{
             session()->flash('error', 'Email ou senha incorretos');
        }

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
