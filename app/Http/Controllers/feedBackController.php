<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Display a listing of feedback
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('review', compact('feedbacks'));
    }

    // Show the form for creating new feedback
    public function create()
    {
        return view('create_review');
    }

    // Store newly created feedback in storage
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'rating' => 'required|integer|min:1|max:5',
    ]);

    Feedback::create($validatedData);

    return redirect()->route('feedback.index')->with('success', 'Review submitted successfully!');
    }


    // Display the specified feedback
    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('show_review', compact('feedback'));
    }

    // Show the form for editing the specified feedback
    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('edit_review', compact('feedback'));
    }

    // Update the specified feedback in storage
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($validatedData);

        return redirect()->route('feedback.index')->with('success', 'Feedback updated successfully!');
    }

    // Remove the specified feedback from storage
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('feedback.index')->with('success', 'Feedback deleted successfully!');
    }
}
