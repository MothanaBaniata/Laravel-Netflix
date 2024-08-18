<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_name' => 'required|max:255',
            'movie_description' => 'required',
            'movie_gener' => 'required|max:255',
        ]);
        Movie::create($request->all());
        return redirect()->route('movies.index')
            ->with('success', 'Movie created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'movie_name' => 'required|max:255',
            'movie_description' => 'required',
            'movie_gener' => 'required',
        ]);
        $movie = Movie::find($id);
        $movie->update($request->all());
        return redirect()->route('movies.index')
            ->with('success', 'Movie updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect()->route('movies.index')
            ->with('success', 'movie deleted successfully');
    }
}
