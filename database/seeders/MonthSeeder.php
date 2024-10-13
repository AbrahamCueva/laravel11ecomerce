<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $months = [
            ['name' => 'Enero'],
            ['name' => 'Febrero'],
            ['name' => 'Marzo'],
            ['name' => 'Abril'],
            ['name' => 'Mayo'],
            ['name' => 'Junio'],
            ['name' => 'Julio'],
            ['name' => 'Agosto'],
            ['name' => 'Septiembre'],
            ['name' => 'Octubre'],
            ['name' => 'Noviembre'],
            ['name' => 'Diciembre'],
        ];

        DB::table('month_names')->insert($months);
    }
}
