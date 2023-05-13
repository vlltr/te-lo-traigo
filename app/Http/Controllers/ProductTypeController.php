<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::all();

        return view('product_types.index', compact('productTypes'));
    }

    public function create()
    {
        return view('product_types.create');
    }

    public function show(ProductType $productType)
    {
        return view('product_types.show', compact('productType'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'freight' => 'required|numeric',
            'import_cost' => 'required|numeric',
            'sure' => 'required|numeric',
            'tax' => 'required|numeric',
        ]);

        ProductType::create($request->only('name', 'freight', 'import_cost', 'sure', 'tax'));

        return redirect()->route('product_types.index')
            ->with('success', 'Product Type created successfully.');
    }

    public function edit(ProductType $productType)
    {
        return view('product_types.edit', compact('productType'));
    }

    public function update(Request $request, ProductType $productType)
    {
        $request->validate([
            'name' => 'required|max:225',
            'freight' => 'required|numeric',
            'import_cost' => 'required|numeric',
            'sure' => 'required|numeric',
            'tax' => 'required|numeric',
        ]);

        $productType->update($request->only('name', 'freight', 'import_cost', 'sure', 'tax'));

        return redirect()->route('product_types.index')
            ->with('success', 'Product Type updated successfully.');
    }

    public function destroy(ProductType $productType)
    {
        $productType->delete();

        return redirect()->route('product_types.index')
            ->with('success', 'Product deleted successfully.');
    }
}
