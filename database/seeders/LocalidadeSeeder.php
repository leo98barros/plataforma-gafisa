<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LocalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Array como nome dos localidades
        $locales = [
            ['name' => 'São Paulo', 'uf' => 'SP'],
            ['name' => 'Rio de Janeiro', 'uf' => 'RJ'],
        ];

        // Inserindo nome por nome na tabela
        foreach ($locales as $local) {
            DB::table('localidades')->insert([
                'name' => $local['name'],
                'uf' => $local['uf'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
