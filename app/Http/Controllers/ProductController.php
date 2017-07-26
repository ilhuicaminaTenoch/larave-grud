<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate();
       return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');

    }

    public function update(ProductRequest $request, $id)
    {
        $producto = Product::find($id);

        $producto->name = $request->name;
        $producto->short = $request->short;
        $producto->body = $request->body;

        $producto->save();

        return redirect()->route('products.index')->with('info', 'El producto fue actualizado.');
    }

    public function store(ProductRequest $request)
    {
        $producto = new Product();

        $producto->name = $request->name;
        $producto->short = $request->short;
        $producto->body = $request->body;

        $producto->save();

        return redirect()->route('products.index')->with('info', 'El producto fue guardado.');
    }

    public function destroy($id)
    {
        $productos = Product::find($id);
        $productos->delete();

        return back()->with('info', 'El producto fe eliminado.');
    }

    public function show($id)
    {
        $productos = Product::find($id);
        return view('products.show', compact('productos'));
    }



    public function edit($id)
    {
        $productos = Product::find($id);
        return view('products.edit', compact('productos'));
    }

}
