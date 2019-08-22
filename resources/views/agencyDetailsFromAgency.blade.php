{{--      from router --> '/booking/{from_id}/{to_id}', 'bookingController@showAgency' To -->;          --}}

@extends('layout.layout')

@section('body')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                minDate:0,
                onSelect : function (dateText, inst) {
                    $("input[name='date']").val(dateText);
                    $('#formId').submit(); // <-- SUBMIT
                }
            });
        } );
    </script>

    <div class="wrapper">


        <table class="table">
            <thead>
            <tr class="bg-secondary">
                <th scope="col">Agency</th>
                <th scope="col">Buses</th>
                <th scope="col">First Trip</th>
                <th scope="col">Last Trip</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$agency->name }}</th>
                    <td>{{COUNT($agency->bus()->get())}} buses</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>
                        <form id="formId" action="/bookingbus" method="GET">
                            <input type="hidden" name="agencyId" value={{$agency->id}}>
                            <input type="hidden" name="date" id="" value="Nothing">
                            <input type="button" id="datepicker" value="Select Date">
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

@endsection
