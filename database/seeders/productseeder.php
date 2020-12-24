<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::truncate();
        Product::insert(
            [
                'kodeproduct' => Str::random('5'),
                'namaproduct' => 'Kecap',
                'kategoriproduct' => 'Sachet',
                'quantityproduct' => rand('1','4'),
                'status_id' => '1',
                'created_at' => now()
            ],
        );
    }
}
