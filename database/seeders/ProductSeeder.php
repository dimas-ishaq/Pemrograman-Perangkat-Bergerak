<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        // Pastikan ada user, jika belum ada maka buat
        $user = User::first() ?? User::create([
            'name' => 'Admin Seeder',
            'email' => 'admin@demo.com',
            'password' => bcrypt('password'),
        ]);

        // Pastikan ada kategori (jika tidak ada, buat dummy 5 kategori)
        if (Category::count() === 0) {
            $categories = ['Fashion', 'Elektronik', 'Aksesoris', 'Gadget', 'Rumah Tangga'];
            foreach ($categories as $cat) {
                Category::create([
                    'name' => $cat,
                    'description' => 'Kategori untuk produk ' . strtolower($cat),
                ]);
            }
        }

        $categoryIds = Category::pluck('id')->toArray();

        $products = [
            [
                'name' => 'Kemeja Batik Pria Lengan Panjang',
                'price' => 249000,
                'stock' => 50,
                'description' => 'Kemeja batik modern cocok untuk acara formal maupun santai.',
                'image' => 'products/batik_pria.jpg',
            ],
            [
                'name' => 'Sepatu Sneakers Putih Wanita',
                'price' => 359000,
                'stock' => 30,
                'description' => 'Sepatu casual putih nyaman dipakai untuk aktivitas sehari-hari.',
                'image' => 'products/sneakers_wanita.jpg',
            ],
            [
                'name' => 'Tas Ransel Laptop Waterproof',
                'price' => 299000,
                'stock' => 40,
                'description' => 'Tas ransel dengan bahan tahan air dan kompartemen laptop hingga 15 inci.',
                'image' => 'products/tas_ransel.jpg',
            ],
            [
                'name' => 'Jam Tangan Digital LED Pria',
                'price' => 179000,
                'stock' => 60,
                'description' => 'Jam tangan digital dengan fitur stopwatch dan waterproof ringan.',
                'image' => 'products/jam_tangan_led.jpg',
            ],
            [
                'name' => 'Headphone Bluetooth Bass Boost',
                'price' => 429000,
                'stock' => 25,
                'description' => 'Headphone nirkabel dengan suara bass mendalam dan baterai tahan lama.',
                'image' => 'products/headphone_bluetooth.jpg',
            ],
            [
                'name' => 'Mouse Wireless Silent Click',
                'price' => 99000,
                'stock' => 80,
                'description' => 'Mouse wireless dengan desain ergonomis dan suara klik yang senyap.',
                'image' => 'products/mouse_wireless.jpg',
            ],
            [
                'name' => 'Keyboard Mechanical RGB 87 Keys',
                'price' => 499000,
                'stock' => 35,
                'description' => 'Keyboard mechanical dengan lampu RGB dan switch tactile premium.',
                'image' => 'products/keyboard_mechanical.jpg',
            ],
            [
                'name' => 'Powerbank 20000mAh Fast Charging',
                'price' => 259000,
                'stock' => 45,
                'description' => 'Powerbank kapasitas besar dengan dukungan fast charging USB-C.',
                'image' => 'products/powerbank_20000.jpg',
            ],
            [
                'name' => 'Botol Minum Stainless 1 Liter',
                'price' => 149000,
                'stock' => 70,
                'description' => 'Botol minum berbahan stainless steel menjaga suhu panas dan dingin.',
                'image' => 'products/botol_stainless.jpg',
            ],
            [
                'name' => 'Kaos Oversize Cotton Premium',
                'price' => 129000,
                'stock' => 90,
                'description' => 'Kaos oversize berbahan katun premium, lembut dan nyaman dipakai.',
                'image' => 'products/kaos_oversize.jpg',
            ],
        ];

        foreach ($products as &$product) {
            $product['user_id'] = $user->id;
            $product['slug'] = Str::slug($product['name']);
            $product['is_deleted'] = false;
            $product['status'] = true;
            $product['category_id'] = fake()->randomElement($categoryIds);
        }

        DB::table('products')->insert($products);
    }
}
