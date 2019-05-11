@extends('layout.layout')

@section('body')

    <div class="profile-user_head wrapper">
        <h1>Profile</h1>
        <p>Name: Admin</p>
        <p>level: Admin</p>
    </div>


 <div class="profile-user_body wrapper">
     <h2>User Details</h2>
     <table class="table table-hover">
         <thead>

         <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Join Date</th>
             <th></th>
         </tr>
         </thead>
         <tbody>
         @foreach($users as $user)
         <tr>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->created_at}}</td>
             <td><a href="">Delete</a></td>
         </tr>
             @endforeach
         </tbody>
     </table>

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
                <td>{{ $ticket->price }}</td>
                <td>{{ $ticket->status }}</td>

            </tr>
                @endforeach
            </tbody>
        </table>

    </div>



@endsection