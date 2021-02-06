<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
/*        $this->call(UserSeeder::class);
        Artisan::call('scraper:start');
        $this->call(CommentSeeder::class);*/
        /*$this->call(BrandSeeder::class);*/




/*        $this->call(CategorySeeder::class);

        $id = DB::table('kategoris')->insertGetId(['name' => 'Cil Bakımı','slug' => 'elektrtonik']);
        DB::table('categories')->insert(['name' => 'Bilgisayar/Tablet','slug' => 'bilgisayar-tablet','ust_id' => $id]);
        DB::table('categories')->insert(['name' => 'Telefon','slug' => 'telefon','ust_id' => $id]);
        DB::table('categories')->insert(['name' => 'TV ve Ses Sistemleri','slug' => 'tv-ve-ses-sistmeleri','ust_id' => $id]);
        DB::table('categories')->insert(['name' => 'Kamera','slug' => 'kamera','ust_id' => $id]);

        $id = DB::table('categories')->insertGetId(['name' => 'Kitap','slug' => 'kitap']);
        DB::table('categories')->insert(['name' => 'Edebiyat','slug' => 'edebiyat','ust_id' => $id]);
        DB::table('categories')->insert(['name' => 'Çocuk','slug' => 'cocuk','ust_id' => $id]);
        DB::table('categories')->insert(['name' => 'Bilgisayar','slug' => 'bilgisayar','ust_id' => $id]);

        DB::table('categories')->insert(['name' => 'Dergi','slug' => 'dergi']);
        DB::table('categories')->insert(['name' => 'Mobilya','slug' => 'mobilya']);
        DB::table('categories')->insert(['name' => 'Dekorasyon','slug' => 'dekorasyon']);
        DB::table('categories')->insert(['name' => 'Kozmetik','slug' => 'kozmetik']);
        DB::table('categories')->insert(['name' => 'Kişisel Bakım','slug' => 'kisisel-bakim']);
        DB::table('categories')->insert(['name' => 'Giyim ve Moda','slug' => 'giyim-ve-moda']);
        DB::table('categories')->insert(['name' => 'Anne ve Çocuk','slug' => 'anne-ve-cocuk']);*/
        /*$this->call(BlogSeeder::class);*/
    }
}
