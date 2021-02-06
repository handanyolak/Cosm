<?php

namespace App\Console\Commands;

use App\Models\Photo;
use App\Models\Product;
use Goutte\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ScraperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();
        DB::table('photos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $client = new Client();
        $url = "https://www.koredenkozmetik.com/collections/tum-urunler";
        $crawler = $client->request('GET', $url);

        $sonSayfa = substr($crawler->filter('.pagination')->text(), -1);

        for ($b = 1; $b <= $sonSayfa; $b++){
            $mevcutSayfa = $client->request('GET', 'https://www.koredenkozmetik.com/collections/tum-urunler?page=' . $b);
            $crawler = $mevcutSayfa;

            //if ($i == 1 || $i == $sonSayfa){
                $urunSayisi = $crawler->filter('.item-product-image-box')->count();
            //    }

            for ($i = 0; $i < $urunSayisi; $i++){

                $urunAdi = $crawler->filter('.product-name > a')->eq($i)->text();

                $urunLinki = $crawler->selectLink($urunAdi)->link();

                $crawler = $client->click($urunLinki);

                $urununAdi = $crawler->filter('.product-name > h3')->text();
                $urununFiyati = str_replace('TL', '', $crawler->filter('#price-preview')->text());
                $urununGorseli = $crawler->selectImage('')->eq(5)->image()->getUri();

                $product = Product::create([
                    'name' => $urununAdi,
                    'category_id' => rand(1,7),
                    'price' => $urununFiyati,
                    'thumbnail' => $urununGorseli,
                    'rating' => rand(0,5),
                ]);

                $fotoSayisi = $crawler->filter('#item-thumbnails > div > a > img')->count();

                for ($a = 0; $a < $fotoSayisi; $a++) {
                    $fotoLinki = $crawler->filter('#item-thumbnails > div > a')->selectLink('')->eq($a)->link()->getUri();

                    Photo::create([
                        'product_id' => $product->id,
                        'link' => $fotoLinki,
                    ]);
                }

                $crawler = $mevcutSayfa;
            }
        }

        print "basarili\n";

        return 0;
    }
}
