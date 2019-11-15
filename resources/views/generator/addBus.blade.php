{{--from Route::get('/admin/bus/create', 'AdminController@showCity');--}}
@extends('layout.layout')

@section('body')

    <div class="container">
        <form action="/admin/route" method="POST">
            @csrf
            <div class="row">
                <div class="col-4">Agency: </div>
                <div class="col-8">
                    <select name="agency_id" id="from">
                        <option value=""></option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Route: </div>
                <div class="col-8">
                    <select name="route_id" id="to">
                        @foreach($cities as $city )
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                        <option value="addCity">Add City</option>

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
                    <select name="type" id="to">
                        <option value="A/C">A/C</option>
                        <option value="NON A/C">NON A/C</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Type: </div>
                <div class="col-8">
                    <input type="text" name="seats">
                </div>
            </div>
            <div class="row">
                <div class="col-4">Type: </div>
                <div class="col-8">
                    <input type="text" name="seats">
                </div>
            </div>

            <div><input type="submit" value="Add Route"></div>
        </form>
    </div>

@endsection
