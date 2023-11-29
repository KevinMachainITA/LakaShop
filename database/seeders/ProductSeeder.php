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
            'price' => 59.0,
            'stock' => 100,
            'discount' => 0,
            'size' => '27',
            'image' => 'https://i.postimg.cc/nr5SvRz2/ADIDAS-ORIGINALS-SUPERSTAR.png',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Air Force 1',
            'description' => 'El fulgor vive en Nike Air Force 1 ’07, el ícono del básquetbol que le da un toque fresco a las características más recordadas',
            'price' => 90,
            'stock' => 250,
            'discount' => 0,
            'size' => '25',
            'image' => 'https://i.postimg.cc/Jn9xZTPy/Air-Force-1.png',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Converse Chuck Taylor All Star',
            'description' => 'Las Chuck Taylor All Star de Converse son un icono del estilo casual.',
            'price' => 55.0,
            'stock' => 120,
            'discount' => 5,
            'size' => '28',
            'image' => 'https://i.postimg.cc/FH2MZjCN/CONVERSE-CHUCK-TAYLOR-ALL-STAR.png',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('products')->insert([
            'name' => 'Vans Old Skool',
            'description' => 'Un clásico de skate que ha trascendido las pistas. Estilo versátil que se adapta a cualquier ocasión informal.',
            'price' => 45,
            'stock' => 80,
            'discount' => 0,
            'size' => '26',
            'image' => 'https://i.postimg.cc/TYJrh3Z5/Vans-Old-Skool.png',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Air Zoom Pegasus 38',
            'description' => 'Las Nike Air Zoom Pegasus 38 son zapatillas de running de alto rendimiento.',
            'price' => 120,
            'stock' => 75,
            'discount' => 15,
            'size' => '25',
            'image' => 'https://i.postimg.cc/NfGdZYNK/NIKE-AIR-ZOOM-PEGASUS-38.png',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Juniper Trail 2 GORE-TEX',
            'description' => 'El Juniper Trail 2 tiene GORE-TEX impermeable en la parte superior, tracción adherente y una entresuela suave y acolchada.',
            'price' => 80,
            'stock' => 100,
            'discount' => 10,
            'size' => '28',
            'image' => 'https://i.postimg.cc/Pf0ZfpRq/Nike-Juniper-Trail-2-GORE-TEX.png',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Air Max 270',
            'description' => 'Combina comodidad y moda con la tecnología Air Max. Diseño moderno y colores llamativos para destacar en la multitud.',
            'price' => 50,
            'stock' => 50,
            'discount' => 0,
            'size' => '27',
            'image' => 'https://i.postimg.cc/NMBJ9zdQ/Nike-Air-Max-270.png',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Adidas Ultraboost 21',
            'description' => 'Impulsadas por la innovadora tecnología Boost para un retorno de energía sin igual. Diseñadas para corredores exigentes.',
            'price' => 180,
            'stock' => 75,
            'discount' => 15,
            'size' => '27',
            'image' => 'https://i.postimg.cc/xTCZ3BnC/Adidas-Ultraboost-21.png',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Air Zoom',
            'description' => 'Las Nike Air son zapatillas de running de alto rendimiento.',
            'price' => 50,
            'stock' => 100,
            'discount' => 5,
            'size' => '29',
            'image' => 'https://i.postimg.cc/rF0JmTqS/Nike-Air-Zoom.png',
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
            'size' => '28',
            'image' => 'https://i.postimg.cc/RF78RhNF/BROOKS-GHOST-14.png',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Mercurial Superfly 8',
            'description' => 'Los Nike Mercurial Superfly 8 son zapatillas de fútbol de alta gama.',
            'price' => 150,
            'stock' => 45,
            'discount' => 5,
            'size' => '27',
            'image' => 'https://i.postimg.cc/90fcn0rW/NIKE-MERCURIAL-SUPERFLY-8.png',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Phantom GX Club',
            'description' => 'Ya sea que estés empezando o juegues para divertirte, el calzado Club te lleva a la cancha sin comprometer la calidad.',
            'price' => 55,
            'stock' => 40,
            'discount' => 0,
            'size' => '26',
            'image' => 'https://i.postimg.cc/nr8nQJm6/Nike-Phantom-GX-Club.png',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Phantom Luna',
            'description' => 'Adéntrate en el amanecer de un nuevo día y haz que el mundo conozca tus habilidades. La llamativa placa tornasol.',
            'price' => 65,
            'stock' => 35,
            'discount' => 5,
            'size' => '24',
            'image' => 'https://i.postimg.cc/pdL28C6J/Nike-Phantom-Luna.png',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Adidas Copa Mundial',
            'description' => 'Los Adidas Copa Mundial son un clásico atemporal en el mundo del fútbol.',
            'price' => 130,
            'stock' => 60,
            'discount' => 10,
            'size' => '26',
            'image' => 'https://i.postimg.cc/9QBCCyZW/ADIDAS-COPA-MUNDIAL.png',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Puma Future Z 1.1',
            'description' => 'Botas innovadoras con tecnología de ajuste adaptable para un toque preciso y velocidad en el campo.',
            'price' => 180,
            'stock' => 40,
            'discount' => 10,
            'size' => '26',
            'image' => 'https://i.postimg.cc/85YvQFJx/Puma-Future-Z-1-1.png',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Air Jordan 1 Retro High OG',
            'description' => 'Las Air Jordan 1 Retro High OG son un ícono de la cultura sneaker.',
            'price' => 190,
            'stock' => 30,
            'discount' => 0,
            'size' => '31',
            'image' => 'https://i.postimg.cc/rpKVjKRM/AIR-JORDAN-1-RETRO-HIGH-OG.png',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Air Jordan 4 Retro',
            'description' => 'Las Air Jordan 4 Retro son conocidas por su estilo único y su comodidad.',
            'price' => 200,
            'stock' => 25,
            'discount' => 5,
            'size' => '30',
            'image' => 'https://i.postimg.cc/65FxKY8J/AIR-JORDAN-4-RETRO.png',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Air Jordan 11 Retro',
            'description' => 'Elegantes y sofisticadas, estas zapatillas ofrecen estilo y rendimiento. Perfectas tanto para la cancha como para la calle.',
            'price' => 220,
            'stock' => 20,
            'discount' => 0,
            'size' => '30',
            'image' => 'https://i.postimg.cc/sDNN6KgJ/Air-Jordan-11-Retro.png',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Air Jordan 1 Mid',
            'description' => 'Elegantes y sofisticadas, estas zapatillas ofrecen estilo y rendimiento. Perfectas tanto para la cancha como para la calle.',
            'price' => 175,
            'stock' => 50,
            'discount' => 0,
            'size' => '26',
            'image' => 'https://i.postimg.cc/43QHBY8J/Air-Jordan-1-Mid.png',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nike LeBron 19',
            'description' => 'Las Nike LeBron 19 son zapatillas de baloncesto de alto rendimiento.',
            'price' => 180,
            'stock' => 40,
            'discount' => 10,
            'size' => '32',
            'image' => 'https://i.postimg.cc/d0sYND7L/NIKE-LEBRON-19.png',
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Adidas Dame 7',
            'description' => 'Creación de Damian Lillard, estas zapatillas ofrecen estabilidad y tracción para jugadores de baloncesto dinámicos.',
            'price' => 160,
            'stock' => 40,
            'discount' => 15,
            'size' => '30',
            'image' => 'https://i.postimg.cc/N0Hq7S8T/Adidas-Dame-7.png',
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Under Armour Curry 8',
            'description' => 'Las Under Armour Curry 8 son zapatillas de baloncesto diseñadas en colaboración con Stephen Curry.',
            'price' => 150,
            'stock' => 50,
            'discount' => 5,
            'size' => '29',
            'image' => 'https://i.postimg.cc/pd3mngXW/UNDER-ARMOUR-CURRY-8.png',
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
