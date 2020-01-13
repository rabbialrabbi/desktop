{{--from Route::get('/admin/bus/create', 'AdminController@showCity');--}}
@extends('layout.adminlayout')
@section('variables')
    <?php $active= ['add'=>'is-active', 'add_bus'=>'is-active'] ?>
@endsection
@section('subbody')

    <div class="container">
        <h4 class="mb-5">Add Bus</h4>
        <form action="/admin/bus" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-2">Agency: </div>
                <div class="col-10">
                    <select name="agency_id" id="from">
                        <option value="" selected disabled hidden>Choose here</option>
                        @foreach($agencies as $agency)
                        <option value="{{$agency->id}}">{{$agency->name}}</option>
                        @endforeach
                        <option value="Add City" onclick="window.open('/admin/agency/create','_self')">ADD AGENCY</option>

                    </select>
                    @if($errors->has('agency_id'))
                   <span class="text-danger ml-1"> * {{$errors->first('agency_id')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Route: </div>
                <div class="col-10">
                    <select name="route_id" id="to">
                        <option value="" selected disabled hidden>Choose here</option>
                        @foreach($routes as $route )
                        <option value="{{$route->id}}">{{$route->departureCity()->first()->name}} to {{$route->arrivalCity()->first()->name}} </option>
                            @endforeach
                        <option value="Add Route" onclick="window.open('/admin/route/create','_self')">ADD ROUTE</option>
                    </select>
                    @if($errors->has('route_id'))
                   <span class="text-danger ml-1"> * {{$errors->first('route_id')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Bus Number: </div>
                <div class="col-10">
                    <input type="text" name="number">
                    @if($errors->has('number'))
                   <span class="text-danger ml-1"> * {{$errors->first('number')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Model: </div>
                <div class="col-10">
                    <input type="text" name="model">
                    @if($errors->has('model'))
                   <span class="text-danger ml-1"> * {{$errors->first('model')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Type: </div>
                <div class="col-10">
                    <select name="type" id="to">
                        <option value="A/C">A/C</option>
                        <option value="NON A/C">NON A/C</option>
                    </select>
                    @if($errors->has('type'))
                   <span class="text-danger ml-1"> * {{$errors->first('type')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Break: </div>
                <div class="col-10">
                    <input type="text" name="break">
                    @if($errors->has('break'))
                   <span class="text-danger ml-1"> * {{$errors->first('break')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Seats: </div>
                <div class="col-10">
                    <select name="seats" id="to">
                        <option value='30'>3row (30seats)</option>
                        <option value='40'>4row (40seats)</option>
                    </select>
                    @if($errors->has('seats'))
                   <span class="text-danger ml-1"> * {{$errors->first('seats')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Fare: </div>
                <div class="col-10">
                    <input type="text" name="fare">
                    @if($errors->has('fare'))
                   <span class="text-danger ml-1"> * {{$errors->first('fare')}}</span>
                @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">Departure Time: </div>
                <div class="col-10">
                    <input type="time" name="departure_time" placeholder="hh:mm ss">
                    @if($errors->has('departure_time'))
                   <span class="text-danger ml-1"> * {{$errors->first('departure_time')}}</span>
                @endif
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-10">
                    <input type="submit" value="Add Bus">
                </div>
            </div>
        </form>
    </div>

@endsection
