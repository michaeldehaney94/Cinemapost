<?php

namespace App\Http\Controllers;
use App\Models\Cinemas;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinemas = Cinemas::all();

        return view('cinemas.index', compact('cinemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cinemas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cinema_name' => 'required',
            'location' => 'required',
            'city' => 'required'
        ]);

        Cinemas::create([
            'cinema_name' => $request->cinema_name,
            'location' => $request->location,
            'city' => $request->city
        ]);

        return redirect()->route('cinemas.index')->with('message', 'Cinema Added Successfully!');
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinemas $cinema)
    {
        return view('cinemas.edit', compact('cinema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinemas $cinema)
    {
        $request->validate([
            'cinema_name' => 'required',
            'location' => 'required',
            'city' => 'required'
        ]);

        $cinema->update([
            'cinema_name' => $request->cinema_name,
            'location' => $request->location,
            'city' => $request->city
        ]);

        return redirect()->route('cinemas.index')->with('message', 'Cinema Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinemas $cinema)
    {
        $cinema->delete();

        return redirect()->route('cinemas.index')->with('message', 'Cinema Deleted Successfully!');
    }
}
