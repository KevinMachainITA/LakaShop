<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([
            'name' => 'Adidas Originals Superstar',
            'description' => 'Los icónicos Superstar de Adidas son un clásico del estilo urbano.',
            'price' => 1599,
            'stock' => 100,
            'discount' => 0,
            'size' => '5-12',
            'image' => 'https://i.postimg.cc/nr5SvRz2/ADIDAS-ORIGINALS-SUPERSTAR.png',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Converse Chuck Taylor All Star',
            'description' => 'Las Chuck Taylor All Star de Converse son un icono del estilo casual.',
            'price' => 1099,
            'stock' => 120,
            'discount' => 5,
            'size' => '3-13',
            'image' => 'https://i.postimg.cc/FH2MZjCN/CONVERSE-CHUCK-TAYLOR-ALL-STAR.png',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Air Zoom Pegasus 38',
            'description' => 'Las Nike Air Zoom Pegasus 38 son zapatillas de running de alto rendimiento.',
            'price' => 2899,
            'stock' => 75,
            'discount' => 15,
            'size' => '6-14',
            'image' => 'https://i.postimg.cc/NfGdZYNK/NIKE-AIR-ZOOM-PEGASUS-38.png',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Brooks Ghost 14',
            'description' => 'Las Brooks Ghost 14 son conocidas por su comodidad y versatilidad en carreras largas.',
            'price' => 3099,
            'stock' => 90,
            'discount' => 10,
            'size' => '7-15',
            'image' => 'https://i.postimg.cc/RF78RhNF/BROOKS-GHOST-14.png',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Mercurial Superfly 8',
            'description' => 'Los Nike Mercurial Superfly 8 son zapatillas de fútbol de alta gama.',
            'price' => 4399,
            'stock' => 45,
            'discount' => 5,
            'size' => '7-12',
            'image' => 'https://i.postimg.cc/90fcn0rW/NIKE-MERCURIAL-SUPERFLY-8.png',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Adidas Copa Mundial',
            'description' => 'Los Adidas Copa Mundial son un clásico atemporal en el mundo del fútbol.',
            'price' => 1999,
            'stock' => 60,
            'discount' => 10,
            'size' => '6-11',
            'image' => 'https://i.postimg.cc/9QBCCyZW/ADIDAS-COPA-MUNDIAL.png',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Air Jordan 1 Retro High OG',
            'description' => 'Las Air Jordan 1 Retro High OG son un ícono de la cultura sneaker.',
            'price' => 3599,
            'stock' => 30,
            'discount' => 0,
            'size' => '8-13',
            'image' => 'https://i.postimg.cc/rpKVjKRM/AIR-JORDAN-1-RETRO-HIGH-OG.png',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Air Jordan 4 Retro',
            'description' => 'Las Air Jordan 4 Retro son conocidas por su estilo único y su comodidad.',
            'price' => 4199,
            'stock' => 25,
            'discount' => 5,
            'size' => '7-12',
            'image' => 'https://i.postimg.cc/65FxKY8J/AIR-JORDAN-4-RETRO.png',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike LeBron 19',
            'description' => 'Las Nike LeBron 19 son zapatillas de baloncesto de alto rendimiento.',
            'price' => 3599,
            'stock' => 40,
            'discount' => 10,
            'size' => '8-14',
            'image' => 'https://i.postimg.cc/d0sYND7L/NIKE-LEBRON-19.png',
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Under Armour Curry 8',
            'description' => 'Las Under Armour Curry 8 son zapatillas de baloncesto diseñadas en colaboración con Stephen Curry.',
            'price' => 2299,
            'stock' => 50,
            'discount' => 15,
            'size' => '6-13',
            'image' => 'https://i.postimg.cc/pd3mngXW/UNDER-ARMOUR-CURRY-8.png',
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
