<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart($productId)
    {
        //Encontrar el producto por su ID
        $product = Product::findOrFail($productId);

        //Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Verifica si el producto ya está en el carrito del usuario
        $existingCartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();
        if ($existingCartItem) {
            $existingCartItem->increment('quantity');
        } else {
            // Si el producto no está en el carrito, crea un nuevo elemento en el carrito
            $cartItem = new Cart();
            $cartItem->user_id = $userId;
            $cartItem->product_id = $productId;
            $cartItem->quantity = 1; // Puedes ajustar la cantidad inicial si lo necesitas
            $cartItem->save();
        }
        return redirect()->back()->with('success', 'Producto agregado al carrito');


    }

    public function removeFromCart($productId)
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Buscar el elemento del carrito para el usuario actual y el producto especificado
        $cartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // Si se encuentra el elemento del carrito, eliminarlo
            $cartItem->delete();
            return redirect()->back()->with('success', 'Producto eliminado del carrito');
        } else {
            // Si el elemento del carrito no se encuentra, redireccionar con un mensaje de error
            return redirect()->back()->with('error', 'El producto no se encontraba en el carrito');
        }

    }

    public function showCart()
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Obtener los elementos del carrito para el usuario actual
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        // Pasar los elementos del carrito a la vista
        return view('cart.show_cart', compact('cartItems'));
    }

    public function checkout()
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Obtener los elementos del carrito para el usuario actual
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        // Iterar sobre los elementos del carrito y procesar la compra
        foreach ($cartItems as $cartItem) {
            // Verificar si hay suficiente stock disponible
            if ($cartItem->product->stock >= $cartItem->quantity) {
                // Actualizar el stock del producto
                $cartItem->product->stock -= $cartItem->quantity;
                $cartItem->product->save();

                // Eliminar el elemento del carrito
                $cartItem->delete();
            } else {
                // Si no hay suficiente stock, redireccionar con un mensaje de error
                return redirect()->back()->with('error', 'No hay suficiente stock disponible para uno o más productos en el carrito');
            }
        }

        // Redireccionar con un mensaje de éxito
        return redirect()->route('cart.show')->with('success', 'Compra realizada con éxito');
    }

}
