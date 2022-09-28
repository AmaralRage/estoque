<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Tema;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tema::create([
            'nome'          =>'',
            'descrição'    => 10,
            'valor'         => 260
        ]);

        Tema::create([
            'nome'          =>'',
            'descrição'    => 5,
            'valor'         => 150
        ]);

        Tema::create([
            'nome'          =>'',
            'descrição'    => 20,
            'valor'         => 2200
        ]);

    }
}
