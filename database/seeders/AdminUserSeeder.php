<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin Laka Shop',
            'shipping_address' => 'Av. Tecnológico #123 Aguascalientes, ags',
            'phone' => '000123456',
            'email' => 'admin@lakashop.com',
            'password' => bcrypt('holaa123'),
            'admin' => true,
        ]);

        Cart::create([
            'user_id' => $user->id,
        ]);
    }
}
