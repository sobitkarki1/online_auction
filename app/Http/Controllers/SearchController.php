<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; 
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $results = Item::where('name', 'LIKE', "%{$query}%")
                                        ->orWhere('description', 'LIKE', "%{$query}%")
                            ->get();

        return view('search', compact('results', 'query'));
    }
}
