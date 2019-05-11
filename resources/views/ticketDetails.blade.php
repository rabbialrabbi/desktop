@extends('layout.layout')

@section('body')
<div class="wrapper">
    <div class="ticket-details">
    <h1>Information</h1>
    <h4>Agency:{{$ticket->agency}}</h4>
    <p>Name: {{$client->name}}</p>
    <p>Email: {{$client->email}}</p>
    <p>From: {{$ticket->from}}<span class="ticket-details_component">To: {{$ticket->from}}</span></p>
    <p>Price: {{$ticket->price}}</p>
    </div>

    <div class="request-form mt-5">
        <form action="/booking/{{$ticket->id}}" method="post">
            @method('PATCH')
            @csrf
            <fieldset>
                <legend>Submit Request</legend>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="email">
                    </div>
                </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I agreed with all <a href="">Term and Condition</a>
                    </label>
                </div>
            </div>
                <button class="btn btn-primary" type="submit">Request</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection