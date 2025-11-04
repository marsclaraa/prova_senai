<?php

namespace Database\Seeders;

use App\Models\Movimentacao;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MovimentacaoSeeder extends Seeder
{
    public function run(): void
    {

        $faker = Faker::create('pt_BR');

        for ($i = 1; $i <= 3; $i++) {
            Movimentacao::create([
                'produto_id' => Produto::inRandomOrder()->first()->id, // pega um produto aleatório do banco
                'tipo' => $faker->boolean(50), //tem 50% de ser verdadeiro
                'quantidade' => $faker->numberBetween(1, 100),
                'data_movimentacao'=> $faker->date($format = 'Y-m-d', $max = 'now')
            ]);

        }
}
}