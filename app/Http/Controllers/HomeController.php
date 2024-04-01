<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::paginate(20);
        return view('home/home_page', compact('products'));
    }

    public function goToBestSeller()
    {
        return view('home/best_seller_page');
    }

    public function goToLogin()
    {
        return view('login/login_page');
    }

    public function goToProductAdd()
    {
        return view('product/add_product_page');
    }

    public function goToProductDetail()
    {
        return view('product/product_detail_page');
    }

}
