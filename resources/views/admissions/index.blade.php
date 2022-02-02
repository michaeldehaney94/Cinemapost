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
                    Admissions
                </div>

                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif

                <div class="card-body">
                    <h2>Admission Prices</h2>
                    <br>
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
                          @foreach ( $caribs as $carib)
                          <tr>
                            <th scope="row">{{$carib->categories}}</th>
                            <td>{{$carib->regular}}</td>
                            <td>{{$carib->box}}</td>
                            <td>{{$carib->skybox}}</td>
                            <td>{{$carib->vip}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                    <h3>New Kingston Drive In</h3>
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
                          @foreach ($driveIns as $driveIn)
                          <tr>
                            <th scope="row">{{$driveIn->categories}}</th>
                            <td>{{$driveIn->regular}}</td>
                            <td>{{$driveIn->box}}</td>
                            <td>{{$driveIn->skybox}}</td>
                            <td>{{$driveIn->vip}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                      <h3>Sunshine Palace</h3>
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
                              @foreach ($sunshine as $sunshine)
                              <tr>
                                <th scope="row">{{$sunshine->categories}}</th>
                                <td>{{$sunshine->regular}}</td>
                                <td>{{$sunshine->box}}</td>
                                <td>{{$sunshine->skybox}}</td>
                                <td>{{$sunshine->vip}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>

                      <h3>Palace Multiplex</h3>
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
                          @foreach ($multiplex as $multiplex)
                          <tr>
                            <th scope="row">{{$multiplex->categories}}</th>
                            <td>{{$multiplex->regular}}</td>
                            <td>{{$multiplex->box}}</td>
                            <td>{{$multiplex->skybox}}</td>
                            <td>{{$multiplex->vip}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  <br>
                  <p>1. Adult prices apply to individuals 12 years old & over.</p> 
                  <p>2. Child prices apply to individuals 13 months to 11 years old.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
