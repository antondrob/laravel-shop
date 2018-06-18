<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ShopController extends Controller
{
    // Вывод категорий
    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        return view('shop.category',[
            'category' => $category,
            'products' => $category->products()->where('published', 1)->paginate(12)
        ]);
    }
    // Вывод товаров
    public function product($slug){
        return view('shop.product',[
            'product' => Product::where('slug', $slug)->first()
        ]);
    }
}
