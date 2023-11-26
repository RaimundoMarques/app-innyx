<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Produto::updateOrCreate([
        DB::table('produtos')->insert([
            [
                'name'          => 'Fonte de Notebook',
                'description'   => 'Fonte 110v Notebook Acer',
                'price'         => '170',
                'date_valid'    => '2025-10-10',
                'image'         => 'Caminho da imagem',
            ]
        ]);
    }
}
