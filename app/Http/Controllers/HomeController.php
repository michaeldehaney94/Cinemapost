<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movies::all();
        return view('home', compact('movies'));
    }

    public function create() 
    {
        return view('create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'movie_title' => 'required',
            'movie_rating',
            'genre',
            'cast',
            'running_time' => 'required',
            'release_date' => 'required',
            'time_playing' => 'required',
            'week_scheduled' => 'required',
            'plot' => 'required',
            'movie_poster' => 'image',
            'movie_trailer' => 'url'
        ]);

        //store and display movie poster
        $imagePath = request('movie_poster')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);

        $image->save();

        Movie::create([
            'movie_title' => $request->movie_title,
            'movie_rating' => $request->movie_rating,
            'genre' => $request->genre,
            'cast' => $request->cast,
            'running_time'  => $request->running_time,
            'release_date'  => $request->release_date,
            'time_playing'  => $request->time_playing,
            'week_scheduled'  => $request->week_scheduled,
            'plot' => $request->plot,
            'movie_poster'  => $imagePath,
            'movie_trailer'  => $request->movie_trailer
        ]);

        return redirect()->route('home')->with('message', 'Movie Content Created Successfully!'); 
    }

    public function edit() 
    {

    }

    public function destroy() 
    {

    }

    
}
