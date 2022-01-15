<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //słody
        DB::table('products')->insert([
            'name' => 'Słód Pszeniczny Jasny',
            'slug' => 'slod-pszeniczny-jasny',
            'type' => 'słód',
            'img' => '/images/slod-pszeniczny-jasny.jpg',
            'description' => 'Słód Pszeniczny zapewnia świeżość i typowy smak piwa pszenicznego. Jest produkowany wyłącznie z wysokiej jakości pszenicy browarnej. Ponieważ ma wyższą zawartość białka niż słód pilzneński, nadaje się nie tylko do produkcji typowych piw pszenicznych, ale także poprawia pełnię i pianę wszystkich stylów piwa z górnej fermentacji'
        ]);
        DB::table('products')->insert([
            'name' => 'Słód Abbey',
            'slug' => 'slod-abbey',
            'type' => 'słód',
            'img' => '/images/slod-abbey.jpg',
            'description' => 'Wyprodukowany z wysokiej jakości jęczmienia jarego. Wysoki stopień modyfikacji zarówno białek, jak i skrobi. Doskonała kruchość, niezwykle aromatyczny i słodowy. Niskie wartości beta-glukanu. Dodaje głębokiego bursztynowego kolorowu i słodkości smaku gotowego piwa.'
        ]);
        DB::table('products')->insert([
            'name' => 'Słód Red Ale',
            'slug' => 'slod-red-ale',
            'type' => 'słód',
            'img' => '/images/slod-red-ale.jpg',
            'description' => 'Słód Red Ale to aromatyczny słód bogaty w melanoidyny. Używany do bursztynowych i ciemnych piw, aby poprawić kolor i aromat. Specjalny program słodowania zapewnienia odpowiedni smak i aromat poprzez kontrolowaną reakcję Maillarda. Smak Red Ale jest słodowy i gorzki, ale także po dłuższym dojrzewaniu wytwarza prażone i orzechowe posmaki. Słód Red Ale jest również lekko kwaśny a jego aktywność amylolityczna jest niska. Słód Red Ale jest silnie aromatycznym słodem, idealny do specjalnych piw typu APA, IPA, Red Ale i Dark Lagers'
        ]);
        DB::table('products')->insert([
            'name' => 'Palone-Ziarno-Jęczmienia',
            'slug' => 'palone-ziarno-jeczmienia',
            'type' => 'słód',
            'img' => '/images/palone-ziarno-jeczmienia.jpg',
            'description' => 'Palone ziarno jęczmienia to dodatek niesłodowany do piw ciemnych, ziarna palone są w temperaturze 230 oC. Nadaje głęboki, mahoniowy kolor gotowemu piwu.'
        ]);
        DB::table('products')->insert([
            'name' => 'Słód Black',
            'slug' => 'slod-black',
            'type' => 'słód',
            'img' => '/images/slod-black.jpg',
            'description' => 'Wyprodukowany z wysokiej jakości jęczmienia jarego. Słód Black jest wytwarzany z zielonego suszonego słodu, który jest prażony przy użyciu technologii, która zapewnia delikatność i gładkość smaku. Słód nadaje piwu głębię koloru i dodaje intensywnych aromatów czekolady lub kawy.'
        ]);

        //chmiele
        DB::table('products')->insert([
            'name' => 'Chmiel Izabella',
            'slug' => 'chmniel-izabella',
            'type' => 'chmiel',
            'img' => '/images/chmniel-izabella.jpg',
            'description' => 'Izabella, polska odmiana chmielu, będąca krzyżówką chmielu Lubelskiego z dzikim chmielem rosnącym na Bałkanach. Chmiel o żywicznym sosnowym aromacie, z nutami cytryny i mirabelki. Cechuje się przyjemną, niezalegającą goryczką.'
        ]);
        DB::table('products')->insert([
            'name' => 'Chmiel,Simicoe',
            'slug' => 'chmiel-simicoe',
            'type' => 'chmiel',
            'img' => '/images/chmiel-simicoe.jpg',
            'description' => 'Chmiel o właściwościach uniwersalnych. Nadaje charakterystyczny żywiczny aromat i cytrusowe nuty. Goryczka zdecydowana z lekko żywicznym odcieniem. Polecany do piw górnej fermentacji, Pale Ale, AIPA. Stosowany również do chmielenia na zimno.'
        ]);
    }
}
