@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Now playing this week') }}</div>

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="card-body">
                    <div class="m-3">
                        <a href="{{ route('create') }}">
                            <button type="button" class="btn btn-primary">Add Movie</button>
                        </a>
                    </div>

                    @foreach ($movies as $movie)
                        <div class="card" style="max-width: 700px;">
                            <div class="row no-gutters">
                                <div class="col-sm-5" >
                                    <img src="https://www.anime-planet.com/images/characters/64814.jpg?t=1495349124" 
                                    class="card-img-top h-100" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Movie title</h5>
                                    <p class="card-text">Rating</p>
                                    <p class="card-text">Genre</p>
                                    <p class="card-text">Running Time</p>
                                    <p class="card-text">Release Date</p>
                                    <p class="card-text">Cast</p>
                                    <p class="card-text"><strong>Plot</strong></p>
                                    <p class="card-text"><strong>Cinema</strong></p>
                                    <p class="card-text">Time Playing</p>
                                    <a href="#" class="btn btn-primary">Trailer</a>
                                    <button>Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    @endforeach
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
