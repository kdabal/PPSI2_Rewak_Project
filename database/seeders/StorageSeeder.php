<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<2; $i++){
            for($j=0; $j<7; $j++){
                DB::table('storages')->insert([
                    'userid' => $i+1,
                    'productid' => $j+1,
                    'count' => rand(1,20)
                ]);
            }
        }
    }
}
