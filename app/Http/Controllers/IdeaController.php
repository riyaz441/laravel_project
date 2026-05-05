<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = Idea::all();
        return view('idea.index', compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('idea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|min:5|max:1000',
        ]);

        Idea::create($validated);

        return redirect()->route('ideas.index')->with('success', 'Idea created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        return view('idea.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        return view('idea.edit', compact('idea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        $validated = $request->validate([
            'description' => 'required|string|min:5|max:1000',
        ]);

        $idea->update($validated);

        return redirect()->route('ideas.index')->with('success', 'Idea updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect()->route('ideas.index')->with('success', 'Idea deleted successfully!');
    }
}
