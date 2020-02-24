 {{--      from router --> '/booking/{from_id}/{to_id}', 'bookingController@showAgency' To -->;          --}}

@extends('layout.layout')

@section('body')


    <div class="wrapper">
        <h2>Destination : {{$destination_from->name}} to {{$destination_to->name}} </h2>

        <p><strong>{{$destination_to->name}} :</strong>
            {{$destination_to->description}} <a href="{{$destination_to->link}}"> More.. </a></p>

        <h5>Estimate Distance: {{$route_info->est_distance}} Km | Estimate Time : {{$route_info->est_time}} hr | Estimate Price : {{$route_info->est_price}} TK</h5>


        <table class="table table-hover">
            <tr class="table-head">
                <th scope="col" style="width:25%;">Agency</th>
                <th scope="col" style="width:25%;">Trips</th>
                <th scope="col" style="width:25%;">First Trip</th>
                <th scope="col" style="width:25%;"  >Last Trip</th>
            </tr>
        </table>
        @foreach($routes as $route)
        <table class="table table-hover">
            <tr id="tableContent{{$route['agency_id']}}" style="cursor: pointer;" >
                <th scope="row" style="width:25%;" >{{$route['agency'] }}</th>
                <td style="width:25%;">{{$route['trips'] }} (trips)</td>
                <td style="width:25%;">{{$route['first_trip'] }}</td>
                <td style="width:25%;" id="test">{{$route['last_trip'] }}</td>
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
        </table >
            <table id="subTableContent{{$route['agency_id']}}" class="table table-hover" style="display:none;width: 96%;margin-left: auto;margin-right: auto">

            </table>
        @endforeach
    </div>

    @push('scripts')
{{--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>--}}
{{--    <script>--}}
{{--        @foreach($routes as $route)--}}
{{--        $("#tableContent{{$route['agency_id']}}").each(function () {--}}

{{--        })--}}
{{--        @endforeach--}}
{{--        console.log($('#test'))--}}
{{--    </script>--}}
<script >

        @foreach($routes as $route)
        $("#tableContent{{$route['agency_id']}}").click(function() {
            var agencyId = {{$route['agency_id']}};
                var routeId = {{$route_info->id}};
            $('#subTableContent{{$route['agency_id']}}').html("<tr></tr>");

            axios.post('/testdata', {
                agency_id: agencyId,
                route_id: routeId,
                date: '2020/02/20'
            }).then((response) => {

                var table =`<thead>
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
                    <tbody>` ;
            response.data.forEach((buses)=>{
               table += `<tr>
                        <th scope="row">${buses.id}</th>
                        <td>${buses.agency_name}</td>
                        <td>${buses.time}</td>
                        <td>${buses.destination}</td>
                        <td>${buses.type}</td>
                        <td>${buses.fare}</td>
                        <td><a href=${'/bookingseat/'+buses.id+'/'+buses.date}>Booking</a>
</td>
                        </tr>`
                    })

                table+=`</tbody>`;



                $('#subTableContent{{$route['agency_id']}}').append(table).toggle();


            }).catch((error) => {
                console.log(error)
            });
        })


        @endforeach
    </script>

    @endpush
@endsection


