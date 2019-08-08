@extends('layout.layout')

@section('body')

    <div class="wrapper">
        <div class="row wrapper">
            <div class="col-6">
                <div class="sit">

                    <div class="row">
                        <div class="col-4">Get</div>
                        <div class="col-4">Engine</div>
                        <div class="col-4">Wheel</div>
                    </div>

                    <div class="row">
                        <div class="col-2">A1</div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-2">B1</div>
                        <div class="col-2">C1</div>

                    </div>
                </div>
            </div>
            <div class="col-6"></div>

        </div>
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

                <tr>
                    <th scope="row">######</th>
                    <td>######</td>
                    <td>######</td>
                    <td>######</td>
                    <td><a ><button>Details</button></a></td>
                </tr>

            </tbody>
        </table>
    </div>

    @endsection
