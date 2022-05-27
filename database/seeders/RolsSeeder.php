<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'id' => 1,
            'nombreRol' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('rols')->insert([
            'id' => 2,
            'nombreRol' => 'maniobrista',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
