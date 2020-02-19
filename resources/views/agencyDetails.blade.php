 {{--      from router --> '/booking/{from_id}/{to_id}', 'bookingController@showAgency' To -->;          --}}

@extends('layout.layout')

@section('body')


    <div class="wrapper">
        <h2>Destination : {{$destination_from->name}} to {{$destination_to->name}} </h2>

        <p><strong>{{$destination_to->name}} :</strong>
            {{$destination_to->description}} <a href="{{$destination_to->link}}"> More.. </a></p>

        <h5>Estimate Distance: {{$route_info->est_distance}} Km | Estimate Time : {{$route_info->est_time}} hr | Estimate Price : {{$route_info->est_price}} TK</h5>


        <table class="table table-hover">
            <thead>
            <tr class="table-head">
                <th scope="col">Agency</th>
                <th scope="col">Trips</th>
                <th scope="col">First Trip</th>
                <th scope="col">Last Trip</th>
            </tr>
            </thead>
            <tbody>
            @foreach($routes as $route)
            <tr id="tableContent{{$route['agency_id']}}">
                <th scope="row">{{$route['agency'] }}</th>
                <td>{{$route['trips'] }} (trips)</td>
                <td>{{$route['first_trip'] }}</td>
                <td id="test">{{$route['last_trip'] }}</td>
{{--                <td>--}}
{{--                    <form id="formId{{$route['agency_id']}}" action="/bookingbus" method="GET">--}}
{{--                        <input type="hidden" name="agency_id" value={{$route['agency_id']}}>--}}
{{--                        <input type="hidden" name="route_id" value={{$route_info->id}}>--}}

{{--                        @if(!$date)--}}
{{--                            <input type="hidden" name="date" id="" value="Nothing">--}}
{{--                            <input type="button" id="datepicker{{$route['agency_id']}}" onclick="datePicker({{$route['agency_id']}})" value="Select Date">--}}
{{--                            @else--}}
{{--                            <input type="hidden" name="date" value={{$date}}>--}}
{{--                            <input type="submit"  value="Find Bus">--}}
{{--                        @endif--}}

{{--                    </form>--}}
{{--                </td>--}}
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    @push('scripts')
{{--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>--}}
    <script>
        @foreach($routes as $route)
        $("#tableContent{{$route['agency_id']}}").each(function () {

        })
        @endforeach
        console.log($('#test'))
    </script>
    @endpush
@endsection


