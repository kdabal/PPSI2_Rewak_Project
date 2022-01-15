<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            for($j=0; $j<5; $j++){
                $value = Str::random(3);
                if($value == 1)
                {
                    DB::table('storages')->insert([
                        'userid' => $i+1,
                        'productid' => $j+1,
                        'count' => Str::random(20)
                    ]);
                }
            }
        }
    }
}
