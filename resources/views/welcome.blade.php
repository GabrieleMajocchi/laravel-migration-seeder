@extends('layouts.app')

@section('title', 'Welcome to the train station')

@section('main-section')
    <h2 class="text-center">Trains on the binary:</h2>
    <div class="movies text-center d-flex justify-content-between flex-wrap">

    @foreach ($trains as $train)
        <div class="card" style="width: calc(100% / 3 - 15rem); margin: 2rem 7.5rem;">
            <div class="card-body">
                <h5 class="card-title">Company: {{$train->company}}</h5>
                <p class="card-text">Start station:{{$train->start_station}}</p>
                <p class="card-text">Arrive station:{{$train->end_station}}</p>
                <p class="card-text">Departure time:{{$train->departure_time}}</p>
                <p class="card-text">Arrival time:{{$train->arrival}}</p>
                <p class="card-text">Train code:{{$train->train_code}}</p>
                <p class="card-text">Train sections:{{$train->train_section}}</p>
                <p class="card-text">On time:{{$train->on_time}}</p>
                <p class="card-text">Deleted:{{$train->deleted}}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection
