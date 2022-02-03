<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\Cinemas;

class ScheduleController extends Controller
{
  
    public function index(Request $request)
    {
        $movies = Movies::all();

        if ($request->has('search')) {
            $movies = Movies::where('week_scheduled', 'like', "%{$request->search}%")
            ->orWhere('movie_title', 'like', "%{$request->search}%")
            ->get();
        }

        return view('schedule.index', compact('movies'));
    }

   
   
}
