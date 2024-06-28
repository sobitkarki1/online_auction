<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\Bid;
use App\Models\User;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon;

class ItemController extends Controller
{
    
    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'minimum_price' => 'required',
        ]);

        $item = new Item();
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->minimum_price = $request->input('minimum_price');

        // Handle file upload
        if ($request->hasFile('image_path')) {
            $filePath = $request->file('image_path')->store('public/images');
            $item->image_path = $filePath;
        }

        // Associate the authenticated user
        $item->user_id = Auth::id();

        $item->save();

        return redirect()->route('index')->with('success', 'Item uploaded successfully');
    }

    public function index()
    {
        $items = Item::with('user')->get();
        return view('index', compact('items'));
    }

    public function simple_list()
    {
        $items = Item::with('user')->get();
        return view('items.simple_list', compact('items')); 
    }

public function show($id)
    {
        $item = Item::with('bid.user')->find($id); // this is current single item

        $items = Item::with('bid.user')->find($id);

        $userId = Auth::id();


         $bids = Bid::where('item_id', $id)
                   ->get();
        
                 // Fetch the highest bid
        $highestBid = Bid::where('item_id', $id)->max('bid_price');  
        
    
        $user = User::select('id', 'name')->find($userId);

        Log::info('Remaining days start');
        $createdAt = $item->created_at;
        Log::info('2');
  
        // Fetch created_at timestamp of the item
        $createdAt = $item->created_at;

        // Get the current time
        $currentTime = Carbon::now();
        
        // Calculate the remaining days (including negative values)
        $remainingDays = $currentTime->diffInDays($createdAt, false);
        
        // Log the remaining days (including negative values)
        Log::info('Remaining days: ' . $remainingDays);
        
        // Add 15 days to remaining days (allowing for negative values)
        $remainingDays = $remainingDays + 15;
        $remainingDaysInteger = (int)  $remainingDays;

        return view('seemore', compact('item', 'items', 'bids', 'highestBid', 'remainingDaysInteger')); 
    }
}