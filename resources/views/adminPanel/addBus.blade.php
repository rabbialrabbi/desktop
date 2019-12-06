{{--from Route::get('/admin/bus/create', 'AdminController@showCity');--}}
@extends('layout.layout')

@section('body')

    <div class="container">
        <form action="/admin/bus" method="post">
            @csrf
            <div class="row">
                <div class="col-4">Agency: </div>
                <div class="col-8">
                    <select name="agency_id" id="from">
                        @foreach($agencies as $agency)
                        <option value="{{$agency->id}}" selected>{{$agency->name}}</option>

                            @endforeach

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Route: </div>
                <div class="col-8">
                    <select name="route_id" id="to">
                        <option value="" selected disabled hidden>Choose here</option>
                        @foreach($routes as $route )
                        <option value="{{$route->id}}">{{$route->departureCity()->first()->name}} to {{$route->arrivalCity()->first()->name}} </option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Bus Number: </div>
                <div class="col-8">
                    <input type="text" name="number">
                </div>
            </div>
            <div class="row">
                <div class="col-4">Model: </div>
                <div class="col-8">
                    <input type="text" name="model">
                </div>
            </div>
            <div class="row">
                <div class="col-4">Type: </div>
                <div class="col-8">
                    <select name="type" id="to">
                        <option value="A/C">A/C</option>
                        <option value="NON A/C">NON A/C</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Break: </div>
                <div class="col-8">
                    <input type="text" name="break">
                </div>
            </div>
            <div class="row">
                <div class="col-4">Seats: </div>
                <div class="col-8">
                    <select name="seats" id="to">
                        <option value='30'>3row (30seats)</option>
                        <option value='40'>4row (40seats)</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Fare: </div>
                <div class="col-8">
                    <input type="text" name="fare">
                </div>
            </div>
            <div class="row">
                <div class="col-4">Departure Time: </div>
                <div class="col-8">
                    <input type="time" name="departure_time">
                </div>
            </div>

            <div><input type="submit" value="Add Bus"></div>
        </form>
    </div>

@endsection
