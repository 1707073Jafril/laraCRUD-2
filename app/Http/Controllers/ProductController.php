<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class   ProductController extends Controller
{
    //
    public function index()
    {   
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {  // Store Data in database
        $validated_data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'prices' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($validated_data);

        return redirect(route('product.index'));

    }

    public function edit(Product $id){
        return view('products.edit', ['id' => $id]);
    }

    public function update(Product $id, Request $request){
        $validated_data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'prices' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);
        $id->update($validated_data);

        return redirect(route('product.index'))->with('success', 'Product Updated');
    }

    public function delete(Product $id){
        $id->delete();   
        return redirect(route('product.index'))->with('del_success', 'Product Deleted');
    }
}
