@extends('layout.layout')

@section('body')
    {{--Search form Field--}}
    <div id="searchResult" class="formfield">
        <img src= "{{ asset('image/flyair.jpg') }}" alt="BackGround" height="500px">
        <div class="formfield_box">
            <form action="/action_page.php">
                <div class="form-home">
                    <div class="shadow">
                    <div class="form-element">
                    <input class="from" list="from" placeholder="Want to go from">
                    <datalist id="from">

                        @foreach($fromValue as $from)
                            <option value="{{$from}}">
                        @endforeach

                    </datalist>
                    <span></span>
                    </div>
                    <div class="form-element">
                        <input list="to" placeholder="Want to go from">
                        <datalist id="to">

                            @foreach($toValue as $to)
                                <option value="{{$to}}">
                            @endforeach

                        </datalist>
                        <span></span>
                    </div>
                    <div class="form-element">
                        <input list="type" placeholder="Want to go from">
                        <datalist id="type">
                            <option value="Bus">
                        </datalist>
                        <span></span>
                    </div>
                    <div class="form-element">
                        <input type="date">
                    </div>
                    <div class="form-element">
                        <input type="submit">
                    </div>
                    <div class="clr"></div>
                </div>
                </div>
            </form>
        </div>
    </div>




            {{--<div class="formfield_input">--}}
                {{--<form action="/ticket/search" method="post">--}}
                    {{--@csrf--}}
                {{--<table class="formfield_table">--}}
                    {{--<tr class="formfield_table-header">--}}
                        {{--<td>From</td>--}}
                        {{--<td>To</td>--}}
                        {{--<td>Type</td>--}}
                        {{--<td>Time</td>--}}
                        {{--<td></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td><select name="from" id="" required>--}}
                                {{--@foreach($fromValue as $from)--}}
                                    {{--<option value='{{$from}}'>{{$from}}</option>--}}
                                    {{--@endforeach--}}
                            {{--</select></td>--}}
                        {{--<td><select name="to" id="" required>--}}
                                {{--@foreach($toValue as $to)--}}
                                    {{--<option value='{{$to}}'>{{$to}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select></td>--}}
                        {{--<td><select name="route" id="" required>--}}
                                {{--<option value="air">Air</option>--}}
                                {{--<option value="bus">Bus</option>--}}
                                {{--<option value="train">Train</option>--}}
                            {{--</select></td>--}}
                        {{--<td><input type="date" name="date" required></td>--}}
                        {{--<td><input type="submit" value="Search"></td>--}}
                    {{--</tr>--}}
                {{--</table>--}}
                {{--</form>--}}

            {{--</div>--}}


    <div class="search-result wrapper">
        <div class="heading">
        <h2>Available Bus </h2>
        <div class="heading-uline"></div>
        </div>
        <h5>Route : Dhaka -> {{$city->name}}</h5>
        <p><span>{{$city->name}}</span> {{$city->description}} <a href="{{$city->link}}">More</a></p>
        <h5>Estimate Km : 192 | Estimate Time: 5.5hr | Estimate price: 350-1200</h5>
    </div>

        <div class="search-result_table wrapper">
            <table>
                <thead>
                <tr>
                    <th>Agency</th>
                    <th>Trips</th>
                    <th>Time</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>SR. Travels</td>
                    <td>8 trips</td>
                    <td>8 times</td>
                    <td style="text-align: center"><button>Pick Date</button></td>
                </tr>
                </tbody>
            </table>
        </div>



    {{--@if($errors->any())--}}
        {{--@foreach($errors->all() as $e)--}}
            {{--<div class="wrapper">--}}
            {{--<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">--}}
                {{--{{ $e }}--}}
                {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--@endforeach--}}
        {{--@endif--}}

    {{--<div class="list">--}}
        {{--@foreach($data as $d)--}}
        {{--<div class="card wrapper list_betweenSpace">--}}
            {{--<h5 class="card-header">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-9">--}}
                    {{--{{$d->agency}}--}}
                {{--</div>--}}
                {{--<div class="col-3">--}}
                    {{--Date: {{$d->date}}--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</h5>--}}


            {{--<div class="card-body">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-9">--}}
                        {{--<span class="list_component">From: {{$d->from}}</span>--}}
                        {{--<span class="list_component">To: {{$d->to}}</span>--}}
                        {{--<span class="list_component">Price: ${{$d->price}}</span>--}}
                    {{--</div>--}}
                    {{--<div class="col-3 ">--}}
                        {{--<a href="/ticket/{{ $d->id}}/confirm" class= "btn btn-primary list_button" >Request</a>--}}
                        {{--<a href="/ticket/{{ $d->id}}" class="btn btn-primary list_button">Details</a>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
            {{--@endforeach--}}
    {{--</div>--}}


@endsection



