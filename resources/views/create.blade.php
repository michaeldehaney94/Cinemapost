@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('home') }}" class="float-right pr-2">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/back.png"/>
                    </a>
                    Back
                </div>
                <div class="card-body">
                    <h4>Add New Movie</h4>
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- movie title --}}
                        <div class="row mb-3">
                            <label for="movie_title" class="col-md-4 col-form-label text-md-end">Movie Title</label>
                            <div class="col-md-6">
                                <input id="movie_title" type="text" class="form-control @error('movie_title') is-invalid @enderror" name="movie_title" value="{{ old('movie_title') }}" placeholder="e.g. Sandman">

                                @error('movie_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- movie rating --}}
                        <div class="row mb-3">
                            <label for="movie_rating" class="col-md-4 col-form-label text-md-end">Movie Rating</label>
                            <div class="col-md-6">
                                <input id="movie_rating" type="text" class="form-control @error('movie_rating') is-invalid @enderror" name="movie_rating" value="{{ old('movie_rating') }}" placeholder="e.g. PG-13">

                                @error('movie_rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- genre --}}
                        <div class="row mb-3">
                            <label for="genre" class="col-md-4 col-form-label text-md-end">Genre</label>
                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" placeholder="e.g. Crime, Mystery">

                                @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- cast --}}
                        <div class="row mb-3">
                            <label for="cast" class="col-md-4 col-form-label text-md-end">Cast</label>
                            <div class="col-md-6">
                                <input id="cast" type="text" class="form-control @error('cast') is-invalid @enderror" name="cast" value="{{ old('cast') }}" placeholder="e.g. Tim Brown, Sarah Hill, Al Russell">

                                @error('cast')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- running time --}}
                        <div class="row mb-3">
                            <label for="running_time" class="col-md-4 col-form-label text-md-end">Running Time</label>
                            <div class="col-md-6">
                                <input id="running_time" type="text" class="form-control @error('running_time') is-invalid @enderror" name="running_time" value="{{ old('running_time') }}" placeholder="e.g. 2h 50m">

                                @error('running_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- release date --}}
                        <div class="row mb-3">
                            <label for="release_date" class="col-md-4 col-form-label text-md-end">Release Date</label>
                            <div class="col-md-6">
                                <input id="release_date" type="text" class="form-control @error('release_date') is-invalid @enderror" name="release_date" value="{{ old('release_date') }}" placeholder="e.g. mm/dd/yyyy">

                                @error('release_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- time playing --}}
                        <div class="row mb-3">
                            <label for="time_playing" class="col-md-4 col-form-label text-md-end">Time Playing</label>
                            <div class="col-md-6">
                                <input id="time_playing" type="text" class="form-control @error('time_playing') is-invalid @enderror" name="time_playing" value="{{ old('time_playing') }}" placeholder="e.g. Mon, January 01, 2022 @ 3:30pm">

                                @error('time_playing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- week scheduled --}}
                        <div class="row mb-3">
                            <label for="week_scheduled" class="col-md-4 col-form-label text-md-end">Week Scheduled</label>
                            <div class="col-md-6">
                                <input id="week_scheduled" type="text" class="form-control @error('week_scheduled') is-invalid @enderror" name="week_scheduled" value="{{ old('week_scheduled') }}" placeholder="e.g. Jan. 01, 2022 to Jan. 07, 2022">

                                @error('time_playing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- plot --}}
                        <div class="row mb-3">
                            <label for="plot" class="col-md-4 col-form-label text-md-end">Plot</label>
                            <div class="col-md-6">
                                <textarea id="plot" type="text" rows="3" class="form-control @error('plot') is-invalid @enderror" name="plot" value="{{ old('plot') }}"></textarea>

                                @error('plot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- movie poster --}}
                        <div class="row mb-3">
                            <label for="movie_poster" class="col-md-4 col-form-label text-md-end">Movie Poster</label>
                            <div class="col-md-6">
                                <input id="movie_poster" type="url" class="form-control @error('movie_poster') is-invalid @enderror" name="movie_poster" value="{{ old('movie_poster') }}" 
                                placeholder="Copy and paste image URL">

                                @error('movie_poster')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- movie trailer --}}
                        <div class="row mb-3">
                            <label for="movie_trailer" class="col-md-4 col-form-label text-md-end">Movie Trailer</label>
                            <div class="col-md-6">
                                <input id="movie_trailer" type="url" class="form-control @error('movie_trailer') is-invalid @enderror" name="movie_trailer" value="{{ old('movie_trailer') }}"
                                placeholder="Copy and paste URL">

                                @error('movie_trailer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- cinema --}}
                        <div class="row mb-3">
                            <label for="cinema_id" class="col-md-4 col-form-label text-md-end">Cinema</label>
                            <div class="col-md-6">
                                <select id="cinema_id" type="text" class="form-control @error('cinema_id') is-invalid @enderror" name="cinema_id" value="{{ old('cinema_id') }}">
                                    <option value="">Select Cinema Theatre...</option>
                                    @foreach ( $cinemas as $cinema)
                                    <option value="{{$cinema->id}}">{{ $cinema->cinema_name }}</option>
                                    @endforeach
                                </select>

                                @error('cinema_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Add Movie</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection