<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan ada user, jika belum ada maka buat otomatis
        $user = User::first() ?? User::create([
            'name' => 'Admin Seeder',
            'email' => 'admin@demo.com',
            'password' => bcrypt('password'),
        ]);

        $products = [
            [
                'user_id' => $user->id,
                'name' => 'Kemeja Batik Pria Lengan Panjang',
                'slug' => Str::slug('Kemeja Batik Pria Lengan Panjang'),
                'price' => 249000,
                'stock' => 50,
                'description' => 'Kemeja batik modern cocok untuk acara formal maupun santai.',
                'image' => 'products/batik_pria.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Sepatu Sneakers Putih Wanita',
                'slug' => Str::slug('Sepatu Sneakers Putih Wanita'),
                'price' => 359000,
                'stock' => 30,
                'description' => 'Sepatu casual putih nyaman dipakai untuk aktivitas sehari-hari.',
                'image' => 'products/sneakers_wanita.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Tas Ransel Laptop Waterproof',
                'slug' => Str::slug('Tas Ransel Laptop Waterproof'),
                'price' => 299000,
                'stock' => 40,
                'description' => 'Tas ransel dengan bahan tahan air dan kompartemen laptop hingga 15 inci.',
                'image' => 'products/tas_ransel.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Jam Tangan Digital LED Pria',
                'slug' => Str::slug('Jam Tangan Digital LED Pria'),
                'price' => 179000,
                'stock' => 60,
                'description' => 'Jam tangan digital dengan fitur stopwatch dan waterproof ringan.',
                'image' => 'products/jam_tangan_led.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Headphone Bluetooth Bass Boost',
                'slug' => Str::slug('Headphone Bluetooth Bass Boost'),
                'price' => 429000,
                'stock' => 25,
                'description' => 'Headphone nirkabel dengan suara bass mendalam dan baterai tahan lama.',
                'image' => 'products/headphone_bluetooth.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Mouse Wireless Silent Click',
                'slug' => Str::slug('Mouse Wireless Silent Click'),
                'price' => 99000,
                'stock' => 80,
                'description' => 'Mouse wireless dengan desain ergonomis dan suara klik yang senyap.',
                'image' => 'products/mouse_wireless.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Keyboard Mechanical RGB 87 Keys',
                'slug' => Str::slug('Keyboard Mechanical RGB 87 Keys'),
                'price' => 499000,
                'stock' => 35,
                'description' => 'Keyboard mechanical dengan lampu RGB dan switch tactile premium.',
                'image' => 'products/keyboard_mechanical.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Powerbank 20000mAh Fast Charging',
                'slug' => Str::slug('Powerbank 20000mAh Fast Charging'),
                'price' => 259000,
                'stock' => 45,
                'description' => 'Powerbank kapasitas besar dengan dukungan fast charging USB-C.',
                'image' => 'products/powerbank_20000.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Botol Minum Stainless 1 Liter',
                'slug' => Str::slug('Botol Minum Stainless 1 Liter'),
                'price' => 149000,
                'stock' => 70,
                'description' => 'Botol minum berbahan stainless steel menjaga suhu panas dan dingin.',
                'image' => 'products/botol_stainless.jpg',
                'is_deleted' => false,
            ],
            [
                'user_id' => $user->id,
                'name' => 'Kaos Oversize Cotton Premium',
                'slug' => Str::slug('Kaos Oversize Cotton Premium'),
                'price' => 129000,
                'stock' => 90,
                'description' => 'Kaos oversize berbahan katun premium, lembut dan nyaman dipakai.',
                'image' => 'products/kaos_oversize.jpg',
                'is_deleted' => false,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
