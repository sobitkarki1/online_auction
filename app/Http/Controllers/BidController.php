<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_id' => 'required|exists:items,id',
            'bid_price' => 'required|numeric',
        ]);

        $bid = Bid::create([
            'user_id' => auth()->id(),
            'item_id' => $validated['item_id'],
            'bid_price' => $validated['bid_price'],
        ]);

        return redirect()->back()->with('success', 'Bid placed successfully!');
}
}