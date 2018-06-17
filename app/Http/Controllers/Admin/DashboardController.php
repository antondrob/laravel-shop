<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // Dashboard

    public function dashboard(){
        return view('admin.dashboard', [
            'categories'       => Category::lastCategories(5),
            'products'         => Product::lastProducts(5),
            'count_categories' => Category::count(),
            'count_products'   => Product::count()
        ]);
    }
}
