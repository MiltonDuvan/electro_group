<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(20);
        return view('product/manage_products_page', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'brand' => 'required|string',
            'stock' => 'required|integer',
            'cover_image' => 'required|image|mimes:jpeg, png, svg|max:2048',
            'image1' => 'nullable|image|max:2048',
            'image2' => 'nullable|image|max:2048',
            'image3' => 'nullable|image|max:2048',
        ]);

        $product = $request->all();

        $routeImageSave = 'image/';


        if ($cover_image = $request->file('cover_image')) {
            $productImage = date('YmdHis') . "." . $cover_image->getClientOriginalExtension();
            $cover_image->move($routeImageSave, $productImage);
            $product['cover_image'] = $productImage;
        }
        //imagenes opcionales
        $optionalImages = ['image1', 'image2', 'image3'];

        foreach ($optionalImages as $optional_image_key) {
            if ($optional_image = $request->file($optional_image_key)) {
                $optionalImage = date('YmdHis') . "_$optional_image_key." . $optional_image->getClientOriginalExtension();
                $optional_image->move($routeImageSave, $optionalImage);
                $product[$optional_image_key] = $optionalImage;
            }
        }


        Product::create($product);

        return redirect()->route('home_page');
        
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product/edit_product_page', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $request->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'numeric',
            'brand' => 'string',
            'stock' => 'integer',
            'cover_image' => 'image|mimes:jpeg, png, svg|max:2048',
            'image1' => 'image|max:2048',
            'image2' => 'image|max:2048',
            'image3' => 'image|max:2048',
        ]);

        $optionalImages = ['cover_image', 'image1', 'image2', 'image3'];
        $routeImageSave = 'image/';
        foreach ($optionalImages as $optional_image_key) {
            if ($optional_image = $request->file($optional_image_key)) {
                $optionalImage = date('YmdHis') . "_$optional_image_key." . $optional_image->getClientOriginalExtension();
                $optional_image->move($routeImageSave, $optionalImage);
                $product->$optional_image_key = $optionalImage;
            }

            $product->update($request->only(['name', 'description', 'price', 'brand', 'stock']));
            return redirect()->route('manage_products_page');
        }

        $product->update($request->all());
        return redirect()->route('manage_products_page');

    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $product->delete();
        return redirect()->route('manage_products_page');
    }
}
