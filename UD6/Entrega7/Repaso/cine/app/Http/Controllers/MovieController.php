<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('title')->paginate(10);
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'year' => ['nullable','integer','min:1888','max:2100'],
            'genre' => ['nullable','string','max:255'],
            'synopsis' => ['nullable','string'],
        ]);

        $movie = Movie::create($data);
        return redirect()->route('movies.show', $movie);
    }

    public function show(Movie $movie)
    {
        $movie->load('actors');
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'year' => ['nullable','integer','min:1888','max:2100'],
            'genre' => ['nullable','string','max:255'],
            'synopsis' => ['nullable','string'],
        ]);

        $movie->update($data);
        return redirect()->route('movies.show', $movie);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
