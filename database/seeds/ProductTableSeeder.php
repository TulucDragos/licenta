<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => '"https://yoummock.com/wp-content/uploads/2020/04/15-Reducere-hartie-verde-600x600.png',
            'title' => 'Calatorul Sofisticat',
            'description' => 'Usor si comprimabil, Calatorul te insoteste pretutindeni, fara a-l simti in bagaj. Cantarind doar 500g, si placut la atingere, Calatorul este companionul perfect pentru drumetii si excursii, vacante sau biciclit.',
            'price' => 260
        ]);
        $product->save();
    }
}
