@extends('layout.layout')

@section('body')
    <div class="formfield">
        <img src="image/flyair.jpg" alt="BackGround" height="500px">
        <div class="formfield_box">
            <div class="formfield_input">
                <form action="/" method="post">
                    @csrf
                <table class="formfield_table">
                    <tr class="formfield_table-header">
                        <td>From</td>
                        <td>To</td>
                        <td>Type</td>
                        <td>Time</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><select name="from" id="">
                                @foreach($fromValue as $from)
                                    <option value='{{$from}}'>{{$from}}</option>
                                    @endforeach
                            </select></td>
                        <td><select name="to" id="">
                                @foreach($toValue as $to)
                                    <option value='{{$to}}'>{{$to}}</option>
                                @endforeach
                            </select></td>
                        <td><select name="route" id="">
                                <option value="air">Air</option>
                                <option value="bus">Bus</option>
                                <option value="train">Train</option>
                            </select></td>
                        <td><input type="date" name="date"></td>
                        <td><input type="submit" value="Search"></td>
                    </tr>
                </table>
                </form>

            </div>

        </div>
    </div>

    <div class="list">
        @foreach($data as $d)
        <div class="card wrapper list_betweenSpace">
            <h5 class="card-header">{{$d->agency}}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <span class="list_component">From: {{$d->from}}</span>
                        <span class="list_component">To: {{$d->to}}</span>
                        <span class="list_component">Price: ${{$d->price}}</span>
                    </div>
                    <div class="col-3 ">
                        <a href="/booking/{{ $d->id}}" class= "btn btn-primary list_button" >Request</a>
                        <a href="/booking/{{ $d->id}}" class="btn btn-primary list_button">Details</a>
                    </div>
                </div>


            </div>
        </div>
            @endforeach
    </div>


@endsection



