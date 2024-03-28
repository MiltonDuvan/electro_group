<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home/home_page');
    }

    public function goToBestSeller(){
        return view('home/best_seller_page');
    }

    public function goToLogin(){
       return view('login/login_page');
    }

    public function goToProductDetail(){
        return view('product_detail/product_detail_page');
    }

}
