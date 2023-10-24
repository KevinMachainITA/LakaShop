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
            'name' => 'Tenis Lifestyle',
            'description' => ' Calzado versátil y elegante para un estilo de vida activo y a la moda.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Running',
            'description' => 'Zapatillas diseñadas para corredores, ofreciendo comodidad y rendimiento en carreras y entrenamientos.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Fútbol',
            'description' => 'Calzado especializado para el fútbol, con agarre y control optimizados en el campo.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Jordan',
            'description' => 'Zapatillas icónicas de baloncesto con un estilo distintivo, en colaboración con Michael Jordan.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Basketball',
            'description' => 'Zapatillas diseñadas para el baloncesto, proporcionando soporte y tracción en la cancha.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
