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
            'imagePath' => '/storage/calatorul-sofisticat.png',
            'title' => 'Calatorul Sofisticat',
            'description' => 'Usor si comprimabil, Calatorul te insoteste pretutindeni, fara a-l simti in bagaj. Cantarind doar 500g, si placut la atingere, Calatorul este companionul perfect pentru drumetii si excursii, vacante sau biciclit.',
            'price' => 260
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/storage/voinicul-mov.png',
            'title' => 'Voinicul',
            'description' => 'Trainic in munci solicitante, Voinicul este cel mai rezistent hamac tehnic de pe piata la momentul actual, ideal pentru hamacit chiar si cu animalul de companie. Mereu apt de aventura si tesut dintr-un material impermeabil, Voinicul se transforma la nevoie in prelata, ferindu-te de ploaie, soare sau vant.',
            'price' => 280
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/storage/familiarul-albastru.png',
            'title' => 'Familiarul',
            'description' => 'Hamac catifelat si confortabil, din bumbac sau microfibra, Familiarul Yoummock te acompaniaza in momentele de tihna. Mai voluminos decat fratii sai, Familiarul se asaza cel mai bine in spatii generoase, cum ar fi in casa, in curte sau in parc.',
            'price' => 170
        ]);
        $product->save();
    }
}
