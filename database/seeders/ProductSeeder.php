<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = [
            [
                'nome' => 'Tecido Algodão',
                'preco' => 25.90,
                'unidade_medida' => 'metro',
                'itens' => [
                    ['quantidade' => 10, 'cor' => 'Azul', 'valor' => 259.00],
                    ['quantidade' => 5, 'cor' => 'Vermelho', 'valor' => 129.50],
                ],
            ],
            [
                'nome' => 'Botão de Madeira',
                'preco' => 0.75,
                'unidade_medida' => 'unidade',
                'itens' => [
                    ['quantidade' => 100, 'cor' => 'Marrom', 'valor' => 75.00],
                ],
            ],
            [
                'nome' => 'Fita de Cetim',
                'preco' => 3.50,
                'unidade_medida' => 'metro',
                'itens' => [
                    ['quantidade' => 20, 'cor' => 'Branco', 'valor' => 70.00],
                    ['quantidade' => 15, 'cor' => 'Preto', 'valor' => 52.50],
                    ['quantidade' => 8, 'cor' => 'Rosa', 'valor' => 28.00],
                ],
            ],
        ];

        foreach ($produtos as $produto) {
            $itens = $produto['itens'];
            unset($produto['itens']);

            Product::create($produto)->itens()->createMany($itens);
        }
    }
}
