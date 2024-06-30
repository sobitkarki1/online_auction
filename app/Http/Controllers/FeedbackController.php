<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function create()
    {
        $feedbacks = Feedback::all()->get();
        return view('feedback.index');
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->route('feedback.create')->with('success', 'Thank you for your feedback!');
    } 
    public function index()
    {
        
        return view('feedbacks.index', compact('feedbacks'));
    }
}
