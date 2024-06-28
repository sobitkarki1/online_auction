<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\Bid;
use App\Models\User;


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

        $createdAt = $item->created_at;

        $currentTime = now();
        $remainingDays = $item->created_at->diffInDays($currentTime);


        return view('seemore', compact('item', 'items', 'bids', 'highestBid', 'remainingDays')); 
    }
}