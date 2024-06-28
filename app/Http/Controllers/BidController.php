<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;
use App\Models\Item;

use Illuminate\Support\Facades\Log;



class BidController extends Controller
{
    
    public function store(Request $request, $id)
    {

        // Test the execution of the store method
        Log::info('store execution start here... ');

        // Validate the request data
        $validated = $request->validate([
            'bid_price' => 'required',
        ]);

        Log::info('validation done...');

        // Find the item using the provided $id
        $item = Item::findOrFail($id);

         // Example: Logging after fetching the item
         Log::info('Item fetched successfully: ' . $item->name);

         // Example: Logging bid details before saving
        Log::info('Creating bid for item: ' . $item->name . ' with bid price: ' . $request->input('bid_price'));


        // Create a new bid
        $bid = new Bid();
        $bid->user_id = auth()->id();
        $bid->item_id = $item->id;
        $bid->bid_price = $request->input('bid_price');

        // Save the bid
        $bid->save();

        // Log a message after saving
        Log::info('Bid saved successfully.');

        return redirect()->back()->with('success', 'Bid placed successfully!');
    }
}