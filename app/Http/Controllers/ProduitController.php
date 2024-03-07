<?php

use App\Models\Product;
use Illuminate\Http\Request;

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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        Product::create($request->all());

        return redirect('/products')->with('success', 'Produit ajouté avec succès');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        Product::find($id)->update($request->all());

        return redirect('/products')->with('success', 'Produit mis à jour avec succès');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/products')->with('success', 'Produit supprimé avec succès');
    }
}

