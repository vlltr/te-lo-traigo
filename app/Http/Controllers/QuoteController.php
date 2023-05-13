<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\Quote;
use App\Services\QuotePriceService;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function create()
    {

        $product_types = ProductType::select('id', 'name')->get();
        return view('quotes.create', compact('product_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'weight' => 'required|numeric',
            'product_type_id' => 'required|exists:product_types,id',
            'value' => 'required|numeric',
        ]);

        $data = QuotePriceService::calculatePrice($request->product_type_id, $request->value);
        $quote = Quote::create([...$request->only('name', 'email', 'weight', 'product_type_id', 'value'), 'data' => $data]);

        return redirect()->route('quotes.show', $quote)
            ->with('success', 'Quote created successfully.');
    }


    public function show(Quote $quote)
    {
        return view('quotes.show', compact('quote'));
    }
}
