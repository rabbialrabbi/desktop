@extends('layout.layout')

@section('body')
    <div class="formfield">
        <img src="image/flyair.jpg" alt="BackGround" height="500px">
        <div class="formfield_box">
            <div class="formfield_input">
                <form action="/search" method="post">
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
                        <td><select name="from" id="" required>
                                @foreach($fromValue as $from)
                                    <option value='{{$from}}'>{{$from}}</option>
                                    @endforeach
                            </select></td>
                        <td><select name="to" id="" required>
                                @foreach($toValue as $to)
                                    <option value='{{$to}}'>{{$to}}</option>
                                @endforeach
                            </select></td>
                        <td><select name="route" id="" required>
                                <option value="air">Air</option>
                                <option value="bus">Bus</option>
                                <option value="train">Train</option>
                            </select></td>
                        <td><input type="date" name="date" required></td>
                        <td><input type="submit" value="Search"></td>
                    </tr>
                </table>
                </form>

            </div>

        </div>
    </div>

    @if($errors->any())
        @foreach($errors->all() as $e)
            <div class="wrapper">
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ $e }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>

            @endforeach
        @endif

    <div class="list">
        @foreach($data as $d)
        <div class="card wrapper list_betweenSpace">
            <h5 class="card-header">
                <div class="row">
                    <div class="col-9">
                    {{$d->agency}}
                </div>
                <div class="col-3">
                    Date: {{$d->date}}
                </div>
                </div>
                </h5>


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



