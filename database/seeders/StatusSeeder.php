<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Array como nome dos status
        $status = [
            'Lançamento',
            'Em obras',
            'Pronto pra morar',
        ];

        // Inserindo nome por nome na tabela
        foreach ($status as $stat) {
            DB::table('status')->insert([
                'name' => $stat,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
