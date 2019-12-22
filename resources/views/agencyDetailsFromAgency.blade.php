{{--      from router --> '/booking/{from_id}/{to_id}', 'bookingController@showAgency' To -->;          --}}

@extends('layout.layout')

@section('body')




    <div class="wrapper">


        <table class="table">
            <thead class="5-5">
            <tr class="table-head">
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
                            <input type="button" id="agency_datepicker" value="Select Date">
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

@endsection
