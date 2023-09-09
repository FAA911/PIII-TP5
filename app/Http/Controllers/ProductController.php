<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        // Validación de los datos

        // Guardado de los datos
        Product::create($request->all());

        // Redirección con un mensaje flash de sesión
        return redirect()->route('products.index')->with('status', 'Producto creado satisfactoriamente');
    }
    public function update(Request $request, $id)
    {
        // Búsqueda del producto
        $product = Product::findOrFail($id);

        // Validación de los datos

        // Actualización del producto
        $product->update($request->all());

        // Redirección con un mensaje flash de sesión
        return redirect()->route('products.index')->with('status', 'Producto actualizado satisfactoriamente');
    }
    public function destroy($id)
    {
        // Búsqueda del producto
        $product = Product::findOrFail($id);

        // Eliminación del producto
        $product->delete();

        // Redirección con un mensaje flash de sesión
        return redirect()->route('products.index')->with('status', 'Producto actualizado satisfactoriamente');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }
}