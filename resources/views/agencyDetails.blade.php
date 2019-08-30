 {{--      from router --> '/booking/{from_id}/{to_id}', 'bookingController@showAgency' To -->;          --}}

@extends('layout.layout')

@section('body')


    <div class="wrapper">
        <h2>Destination : {{$destination_from->name}} to {{$destination_to->name}} </h2>

        <p><strong>{{$destination_to->name}}</strong>
            {{$destination_to->description}} <a href="{{$destination_to->link}}"> More.. </a></p>

        <h5>Estimate Distance: {{$route_info->est_distance}} Km | Estimate Time : {{$route_info->est_time}} hr | Estimate Price : {{$route_info->est_price}} TK</h5>

        <table class="table">
            <thead>
            <tr class="bg-secondary">
                <th scope="col">Agency</th>
                <th scope="col">Trips</th>
                <th scope="col">First Trip</th>
                <th scope="col">Last Trip</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($routes as $route)
            <tr>
                <th scope="row">{{$route['agency'] }}</th>
                <td>{{$route['trips'] }} (trips)</td>
                <td>{{$route['first_trip'] }}</td>
                <td>{{$route['last_trip'] }}</td>
                <td>
                    <form id="formId{{$route['agency_id']}}" action="/bookingbus" method="GET">
                        <input type="hidden" name="agency_id" value={{$route['agency_id']}}>
                        <input type="hidden" name="route_id" value={{$route_info->id}}>

                        @if(!$date)
                            <input type="hidden" name="date" id="" value="Nothing">
                            <input type="button" id="datepicker{{$route['agency_id']}}" onclick="datePicker({{$route['agency_id']}})" value="Select Date">
                            @else
                            <input type="hidden" name="date" value={{$date}}>
                            <input type="submit"  value="Find Bus">
                        @endif

                    </form>
                </td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    {{--
<div class="wrapper">
    <div class="ticket-details">
    <h1>Information</h1>
    <h4>Agency:{{$ticket->agency}}</h4>
    <p>Name: {{$client->name}}</p>
    <p>Email: {{$client->email}}</p>
    <p>From: {{$ticket->from}}<span class="ticket-details_component">To: {{$ticket->to}}</span></p>
    <p>Price: {{$ticket->price}}</p>
    </div>

    <a href="/ticket/{{$ticket->id}}/confirm"><button class="btn btn-primary" type="submit">Confirm</button></a>


    <div class="request-form mt-5">
        <form action="/booking/{{$ticket->id}}" method="post">
            @csrf
            <fieldset>
                <legend>Contact</legend>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="email" value="{{$client->email}}">
                    </div>
                </div>
                <p>Message:</p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <textarea name="message" id="" cols="70" rows="5"></textarea>

                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I agreed with all <a href="">Term and Condition</a>
                    </label>
                </div>
            </div>
                <button class="btn btn-primary" type="submit">Sent Mail</button>

            </fieldset>
        </form>
    </div>
</div>
--}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        @foreach($routes as $route)
                $("#datepicker{{$route['agency_id']}}").datepicker({
                    minDate:0,
                    onSelect : function (dateText, inst) {
                        $("input[name='date']").val(dateText);
                        $("#formId{{$route['agency_id']}}").submit(); // <-- SUBMIT
                    }
                });
        @endforeach

    </script>

@endsection
