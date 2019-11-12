{{--from Route::get('/bookingseat/{bus_id}', 'bookingController@showSeat')->name('seat.show');--}}
@extends('layout.layout')

@section('body')



    <div class="container">
        @if(session('message'))
            <span style="color:red;"> {{session('message')}}</span>
        @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br><br>
        <h3>Add route</h3>
    <form action="addRoute" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">From: </div>
            <div class="col-8">
                <select name="fromCity" id="from">
                    @foreach($cities as $city )
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                        <option value="addCity">Add City</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-4">To: </div>
            <div class="col-8">
                <select name="toCity" id="to">
                    @foreach($cities as $city )
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                    <option value="addCity">Add City</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-4">Estimate Distance: </div>
            <div class="col-8">
                <input type="text" name="distance">
            </div>
        </div>
        <div class="row">
            <div class="col-4">Estimate Time: </div>
            <div class="col-8">
                <input type="text" name="time">
            </div>
        </div>
        <div class="row">
            <div class="col-4">Estimate Price: </div>
            <div class="col-8">
                <input type="text" name="price">
            </div>
        </div>
        <div><input type="submit" value="Add Route"></div>
    </form>

            {{--available route--}}
            <div class="available_city wrapper">
                <div class="heading">
                    <h2>Available Route </h2>
                    <div class="heading-uline"></div>
                </div>

                <div class="row ">
                    <div class="col-4 available_city-col">

                        <table>


                            @foreach($routes as $route)

                                @if($route->id <=3)
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $route->departureCity()->first()->name}} -----------> {{ $route->arrivalCity()->first()->name}}</p>
                                    @else
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $route->departureCity()->first()->name}} -----------> {{ $route->arrivalCity()->first()->name}}</p>
                                @endif


                            @endforeach
                        </table>

                    </div>
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                </div>
            </div>

    </div>

    <script>
        var pointerFrom = document.getElementById('from');
        pointerFrom.onchange = function () {
            var userOption = this.options[this.selectedIndex];
            if(userOption.value === 'addCity'){
                window.open('/admin/addCity', '_self');
            }
        };
        var pointerTo = document.getElementById('to');
        pointerTo.onchange = function () {
            var userOption = this.options[this.selectedIndex];
            if(userOption.value === 'addCity'){
                window.open('/admin/addCity', '_self');
            }
        }
    </script>

@endsection

