<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithPagination;

class ProdutoIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
    ];


    //deletar
    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        session()->flash('message', 'Ambiente deletado com sucesso.');
    }

    public function render()
    { 
        $produto = Produto::where('nome', 'like', "%{$this->search}%")
            ->orwhere('descricao', 'like', "%{$this->search}%")
            ->orwhere('preco', 'like', "%{$this->search}%")
            ->orwhere('quantidade', 'like', "%{$this->search}%")
            ->orwhere('quantidade_minima', 'like', "%{$this->search}%")
            ->paginate($this->perPage);
        return view('livewire.produto.produto-index');
    }
}
