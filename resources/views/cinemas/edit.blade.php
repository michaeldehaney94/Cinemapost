@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('cinemas.index') }}" class="float-right pr-2">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/back.png"/>
                    </a>
                    Update Cinema Information
                </div>
                <div class="card-body">

                    <form  method="POST" action="{{ route('cinemas.update', $cinema->id) }}">
                        @csrf
                        @method('PUT')
                        {{-- cinema name --}}
                        <div class="row mb-3">
                            <label for="cinema_name" class="col-md-4 col-form-label text-md-end">Name of Cinema</label>
                            <div class="col-md-6">
                                <input id="cinema_name" type="text" class="form-control @error('cinema_name') is-invalid @enderror" 
                                 name="cinema_name" value="{{ old('cinema_name', $cinema->cinema_name) }}" >

                                @error('cinema_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- location --}}
                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">Location</label>
                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" 
                                 name="location" value="{{ old('location', $cinema->location) }}" >

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- city --}}
                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">City</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" 
                                 name="city" value="{{ old('city', $cinema->city) }}" >

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                    <div class="m-2 p-2">
                        <form action="{{route('cinemas.destroy', $cinema->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete {{$cinema->cinema_name}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection