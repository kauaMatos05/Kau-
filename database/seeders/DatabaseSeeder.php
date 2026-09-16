<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $camiseta = Product::create([
            'nome' => 'Camiseta Básica',
            'preco' => 49.90,
            'unidade_medida' => 'unidade',
        ]);
        $camiseta->itens()->createMany([
            ['quantidade' => 10, 'cor' => 'Azul', 'valor' => 45.00],
            ['quantidade' => 5, 'cor' => 'Preta', 'valor' => 47.50],
        ]);

        $tecido = Product::create([
            'nome' => 'Tecido em Metro',
            'preco' => 25.00,
            'unidade_medida' => 'metro',
        ]);
        $tecido->itens()->create([
            'quantidade' => 20,
            'cor' => 'Branco',
            'valor' => 22.00,
        ]);
    }
}
