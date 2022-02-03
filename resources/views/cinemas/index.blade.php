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
                  <h4>Cinemas</h4>
                  <a href="{{route('cinemas.create')}}" class="m-3">
                    <button type="button" class="btn btn-primary">Add Cinema</button>
                  </a>
                  <form action="{{route('cinemas.index')}}" method="get">
                    @csrf

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Cinema</th>
                          <th scope="col">Location</th>
                          <th scope="col">City</th>
                          <th scope="col">Manage</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($cinemas as $cinema)
                        <tr>
                          <td>{{$cinema->cinema_name}}</td>
                          <td>{{$cinema->location}}</td>
                          <td>{{$cinema->city}}</td>
                          <td>
                            <a href="{{ route('cinemas.edit', $cinema->id) }}">
                              {{-- edit button --}}
                              <img src="https://img.icons8.com/ios-glyphs/30/000000/edit--v3.png"/>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
