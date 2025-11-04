<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class Cadastro extends Component
{
    public $nome; 
    public $descricao;
    public $preco; 
    public $quantidade;
    public $quantidade_minima;

    public $rules =[
        'nome'=> 'required',
        'descricao'=> 'required',
        'preco'=> 'required|decimal',
        'quantidade'=> 'required|integer',
        'quantidade_minima'=> 'required|min:1'

    ];

    public function store(){
        
        Produto::create([
            'nome'=>$this->nome,
            'descricao'=>$this->descricao,
            'preco'=>$this->preco,
            'quantidade'=>$this->quantidade,
            'quantidade_minima'=>$this->quantidade_minima
        ]);
            session()->flash('succes', 'Cadastro Realizado');
    }

    public function render()
    {
        return view('livewire.produto.cadastro');
    }
}
