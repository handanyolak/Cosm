<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        if (request()->sort === 'artan'){
            $products = Product::where('name', 'LIKE', '%' . request()->search . '%')->orderBy('price', 'ASC')->paginate(12);
        }elseif (request()->sort === 'azalan'){
            $products = Product::where('name', 'LIKE', '%' . request()->search . '%')->orderBy('price', 'DESC')->paginate(12);
        }else{
            $products = Product::where('name', 'LIKE', '%' . request()->search . '%')->paginate(12);
        }

        return view('products.index', compact('products', 'brands'));
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

}
