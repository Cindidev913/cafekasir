<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama_kategori' => 'Coffe',
            'jumlah' => 3
        ]);
        Kategori::create([
            'nama_kategori' => 'Makanan'
        ]);
        Kategori::create([
            'nama_kategori' => 'Minuman'
        ]);
        Menu::create([
            'foto' => 'foto_menu/Latte.jpg',
            'nama_menu' => 'Coffe Latte',
            'harga' => 10000,
            'kategori_id' => 1
        ]);
        Menu::create([
            'foto' => 'foto_menu/americano.png',
            'nama_menu' => 'Americano',
            'harga' => 12000,
            'kategori_id' => 1
        ]);
        Menu::create([
            'foto' => 'foto_menu/Kopi-susu.jpg',
            'nama_menu' => 'Kopi Susu',
            'harga' => 13000,
            'kategori_id' => 1
        ]);
    }
}
