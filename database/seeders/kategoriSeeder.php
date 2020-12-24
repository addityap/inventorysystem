<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kategori::truncate();
        Kategori::insert([
            [
                'kategori' => 'Sachet',
            ],
            [
                'kategori' => 'Botol',
            ],
        ]);
    }
}
