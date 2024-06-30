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

        // Redirect to the show-success page with a success message
        return redirect()->route('feedbacks.show-success')->with('success', 'Thank you for your feedback!');
        
        // Admins can look at feedback by directly going to http://127.0.0.1:8000/feedback
    } 
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.index', compact('feedbacks'));
    }
}
