<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    $produtos = [
        ['nome' => 'Saia', 'descricao' => 'Saia longa de algodão.', 'preco' => 22.90, 'quantidade' => 100, 'quantidade_minima' => 1],
        ['nome' => 'Camiseta', 'descricao' => 'Camiseta básica unissex.', 'preco' => 39.90, 'quantidade' => 200, 'quantidade_minima' => 5],
        ['nome' => 'Calça Jeans', 'descricao' => 'Calça jeans azul escuro.', 'preco' => 129.90, 'quantidade' => 80, 'quantidade_minima' => 2],
    ];

        Produto::insert($produtos);
    
}
}