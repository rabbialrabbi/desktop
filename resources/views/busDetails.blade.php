{{--From : Route::get('/bookingbus', 'bookingController@showBus');--}}
@extends('layout.layout')


@section('body')

    <div class="wrapper">
        <table class="table">
            <thead>
            <tr class="table-head">
                <th scope="col">SN</th>
                <th scope="col">Agency</th>
                <th scope="col">Time</th>
                <th scope="col">Destination</th>
                <th scope="col">Type</th>
                <th scope="col">Fare</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php  $i= 0 ?>
            @foreach($buses as $bus)

               <?php   $i++  ?>
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$bus->agency()->first()->name }}</td>
                    <td>{{\Carbon\Carbon::parse($bus->departure_time)->format('h:i A') }}</td>
                    <td>{{$bus->route()->first()->departureCity()->first()->name }} to {{$bus->route()->first()->arrivalCity()->first()->name}}</td>
                    <td>{{$bus->model}} {{$bus->type}}</td>
                    <td>{{$bus->fare}}</td>
                    <td>
                        <form id="busDetails" action="{{route('seat.show', ['bus_id' => $bus->id, 'booking_date'=>$booking_date])}}">
                            <input type="button" onclick="$('#busDetails').submit()" value="Booking">
                        </form>
{{--                        <a href="{{route('seat.show', ['bus_id' => $bus->id, 'booking_date'=>$booking_date])}}" ><button>Booking</button></a>--}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    @endsection


