<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            'nome' => 'Banco de Dados',
            'descricao' => 'Categoria de Banco de Dados',
        ]);
    }
}
