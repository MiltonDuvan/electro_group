<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public function index(){
    //     $products = Product::all();
    //     return view('home/home_page', compact('products'));
    // }

    public function store(Request $request){
        $data = $request -> validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'brand'=>'required|string',
            'stock'=>'required|integer',
            'cover_image'=> 'required|image|max:2048',
            'image1'=> 'nullable|image|max:2048',
            'image2'=> 'nullable|image|max:2048',
            'image3'=> 'nullable|image|max:2048',
        ]);

        $data['cover_image'] = $request-> file('cover_image')->store('images/products');
        $data['image1'] = $request-> hasFile('image1') ? $request->file('image1')-> store('images/products') : null;
        $data['image2'] = $request-> hasFile('image2') ? $request->file('image2')-> store('images/products') : null;
        $data['image3'] = $request-> hasFile('image3') ? $request->file('image3')-> store('images/products') : null;

        Product::create($data);
        return redirect()->route('home_page')->with('success', 'Producto creado exitosamente');
    }
}
