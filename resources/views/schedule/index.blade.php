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
                    Schedule
                </div>

                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif

                <div class="card-body">
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
