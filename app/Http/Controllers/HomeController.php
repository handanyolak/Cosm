<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function anasayfa()
    {
        $blogs = Blog::all();
        $products1 = Product::inRandomOrder()->take(3)->get();
        $products2 = Product::inRandomOrder()->take(3)->get();
        $products3 = Product::inRandomOrder()->take(3)->get();
        $products4 = Product::inRandomOrder()->take(3)->get();
        return view('anasayfa', compact('products1', 'products2', 'products3', 'products4', 'blogs'));
    }

    public function brand()
    {

        if (request()->sort === 'artan'){
            $products = Product::where('name', 'LIKE', '%' . request()->brand . '%')->orderBy('price', 'ASC')->paginate(12);
        }elseif (request()->sort === 'azalan'){
            $products = Product::where('name', 'LIKE', '%' . request()->brand . '%')->orderBy('price', 'DESC')->paginate(12);
        }else{
            $products = Product::where('name', 'LIKE', '%' . request()->brand . '%')->paginate(12);
        }
        if(!count($products)){
            return abort(403, 'BÖYLE BİR ÜRÜN BULUNAMADI');
        }
        return view('brand', compact( 'products'));

    }


    public function blog()
    {
        return view('blog');
    }

    public function about()
    {
        return view('about-us');
    }

    public function contact()
    {
        return view('contact');
    }

    public function discount()
    {
        $products = Product::inRandomOrder()->take(20)->get();

        return view('discount', compact('products'));
    }

    public function cart()
    {
        $products = Product::all()->take(2);
        return view('cart', compact('products'));
    }

    public function checkout()
    {
        $products = Product::all()->take(2);
        return view('checkout', compact('products'));
    }

}
