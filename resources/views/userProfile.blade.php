@extends('layout.layout')

@section('body')

    <div class="profile-user_head wrapper">
        <h1>Profile <a href="user/{{auth()->id()}}">[Edit]</a></h1>
        <p>Name: {{auth()->user()->name}}</p>
        <p>level: User</p>
    </div>



    <div class="profile-user_body wrapper">
        <h2>Ticket Details</h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Agency</th>
                <th>From</th>
                <th>To</th>
                <th>price</th>
                <th>status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->agency }}</td>
                    <td>{{ $ticket->from }}</td>
                    <td>{{ $ticket->to }}</td>
                    <td>$ {{ $ticket->price }}</td>
                    <td>{{ $ticket->status }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <div class="profile-user_body wrapper">
        <h2>Pending Ticket</h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Agency</th>
                <th>From</th>
                <th>To</th>
                <th>price</th>
                <th>status</th>
                <th>Confirm</th>
                <th>Deny</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pendings as $pending)
                <tr>
                    <td>{{ $pending->agency }}</td>
                    <td>{{ $pending->from }}</td>
                    <td>{{ $pending->to }}</td>
                    <td>$ {{ $pending->price }}</td>
                    <td>{{ $pending->status }}</td>
                    <td ><a class="tickSymbol" href="/booking/{{$pending->id}}/confirm">&#10004;</a></td>
                    <td><a class="xSymbol" href="/booking/{{$pending->id}}/deny">&#10008</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>



@endsection