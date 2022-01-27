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
                    <h3>Admissions</h3>
                </div>

                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif

                <div class="card-body">
                    <h2>Admission Prices</h2>

                    <h3>Carib 5</h3>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Categories</th>
                            <th scope="col">Regular($)</th>
                            <th scope="col">Box($)</th>
                            <th scope="col">SkyBox($)</th>
                            <th scope="col">VIP($)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
