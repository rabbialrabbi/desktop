@extends('layout.layout')

@section('body')

    <div class="wrapper">
        <h2>Edit Profile</h2>
        <form action="/user/{{$user->id}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" value="{{$user->name}}"><span class="list-error">  {{ $errors->first('name') }}</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputPassword4" value="{{$user->email}}"><span class="list-error">  {{ $errors->first('email') }}</span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Password</label>
                    <input type="password" name="pass" class="form-control" id="inputCity"><span class="list-error">  {{ $errors->first('pass') }}</span>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPass"><span class="list-error">  {{ $errors->first('confirmPass') }}</span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection