<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Running',
            'description' => 'Son modelos pensados para ofrecer estabilidad, amortiguación y durabilidad al corredor, este tipo de zapatillas son las que la gran mayoría de corredores utiliza para sus rodajes a diario, independientemente de su peso.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Montaña',
            'description' => 'Son modelos pensados para ofrecer estabilidad, amortiguación y durabilidad al corredor, este tipo de zapatillas son las que la gran mayoría de corredores utiliza para sus rodajes a diario, independientemente de su peso.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Deportes',
            'description' => 'Son modelos pensados para ofrecer estabilidad, amortiguación y durabilidad al corredor, este tipo de zapatillas son las que la gran mayoría de corredores utiliza para sus rodajes a diario, independientemente de su peso.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Sneakers',
            'description' => 'Son modelos pensados para ofrecer estabilidad, amortiguación y durabilidad al corredor, este tipo de zapatillas son las que la gran mayoría de corredores utiliza para sus rodajes a diario, independientemente de su peso.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Casuales',
            'description' => 'Son modelos pensados para ofrecer estabilidad, amortiguación y durabilidad al corredor, este tipo de zapatillas son las que la gran mayoría de corredores utiliza para sus rodajes a diario, independientemente de su peso.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
