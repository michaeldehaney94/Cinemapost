@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('home') }}" class="float-right pr-2">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/back.png"/>
                    </a>
                    Back
                </div>

                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif

                <div class="card-body">
                    {{-- Search field for user --}}
                    <form method="GET" action="{{ route('schedule.index') }}">
                        @csrf
                        <div class="form-row align-items-center">
                             <div class="col">
                                 <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                 placeholder="Search for what is playing this week...">
                             </div>
                             <div class="col">
                                 <button type="submit" class="btn btn-primary mb-2">Search</button>
                             </div>
                        </div>
                    </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Film</th>
                                <th scope="col">Cast</th>
                                <th scope="col">Time Playing</th>
                                <th scope="col">Week Scheduled</th>
                                <th scope="col">Cinema</th>
                                <th scope="col">Manage</th>
                            </tr>
                            </thead>
                            @foreach ($movies as $movie)
                            <tbody>
                            <tr>
                                <th>
                                    {{$movie->movie_title}}<br>
                                    {{$movie->movie_rating}}, {{$movie->running_time}}.<br>
                                    <a href="{{$movie->movie_trailer}}" target="_blank">
                                        Watch Trailer
                                    </a>
                                </th>
                                <td>{{$movie->cast}}</td>
                                <td>{{$movie->time_playing}}</td>
                                <td>{{$movie->week_scheduled}}</td>
                                <td>{{$movie->cinema->cinema_name}}</td>
                                <td>
                                    <a href="/edit/{{ $movie->id }}">
                                        <img src="https://img.icons8.com/ios-glyphs/30/000000/edit--v1.png"/>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
