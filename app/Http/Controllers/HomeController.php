<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\Cinemas;
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
        $cinemas = Cinemas::all();
        return view('create', compact('cinemas'));
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
            'movie_poster' => ['required','image','mimes:jpeg,jpg,png','max:2048'],
            'movie_trailer' => 'url',
            'cinema_id' => 'required'
        ]);

        //store and display movie poster
        if ($request->hasFile('movie_poster')) {
            $image = $request->file('movie_poster');
            $imageName = $image->getClientOriginalName();
            $imagePath = "public/uploads/".$imageName;
            $saveImage = Image::make($image)->save(storage_path('app/'.$imagePath))->fit(600, 300); //w x h
        }
        
        Movies::create([
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
            'movie_trailer'  => $request->movie_trailer,
            'cinema_id' => $request->cinema_id
        ]);

        return redirect()->route('home')->with('message', 'Movie Content Created Successfully!'); 
    }

   public function edit(Movies $movie)
   {
       $cinemas = Cinemas::all();
        return view('edit', compact('movie', 'cinemas'));
   }

   public function update(Request $request, Movies $movie)
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
            'movie_poster' => ['required','image','mimes:jpeg,jpg,png','max:2048'],
            'movie_trailer' => 'url',
            'cinema_id' => 'required'
        ]);

        
        if ($request->hasFile('movie_poster')) {
            $image = $request->file('movie_poster');
            $imageName = $image->getClientOriginalName();
            $imagePath = "public/uploads/".$imageName;
            $saveImage = Image::make($image)->save(storage_path('app/'.$imagePath))->fit(600, 300); //w x h
        }

        $movie->update([
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
            'movie_trailer'  => $request->movie_trailer,
            'cinema_id' => $request->cinema_id
        ]);

        return redirect()->route('home')->with('message', 'Movie Updated Successfully!');
   }

   public function destroy(Movies $movie)
   {
    $movie->delete();

    return redirect()->route('home')->with('message', 'Movie Deleted Successfully!');
   }


    
}
   