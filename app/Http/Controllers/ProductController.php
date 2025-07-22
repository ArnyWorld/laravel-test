<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $datos = ['product' => $product];
        return view('product.index', $datos);
    }

    public function create()
    {
        return view('product.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer|min:0'
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return 'Product Created Successfully';
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $data = ['product' => $product];
        return view('product.edit', $data);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $product = Product::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer|min:0',
        ]);
        $product->update($request->all());
        //return 'Registro actualizado';
        return redirect('/product');
    }

    public function deleteconfirm($id)
    {
        $product = Product::find($id);
        $data = ['product' => $product];

        return view('product.delete', $data);
    }

    public function delete($id): RedirectResponse
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }
}
