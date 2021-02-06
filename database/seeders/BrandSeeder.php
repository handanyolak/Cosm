<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['ARIUL', 'COSRX', 'ISNTREE', 'HEIMISH', 'CLADERM', 'SKINFOOD', 'SKIN&LAB'];

        for($i=0; $i<=6; $i++){
            Brand::insert([
                'name' => $name[$i],
                'slug' => Str::slug($name[$i]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
