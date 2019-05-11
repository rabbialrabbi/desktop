@extends('layout.layout')

@section('body')
<div class="login">
    <div class="login-welcomeText">
    <h1>login</h1>
    </div>
    <div class="login_inputField">
        <div class="login_inputField-image">
            <img src="image/avatar.jpg" alt="Avater" width="150" height="150">
        </div>
        <div class="login_input">
            <form action="">
            <p>User Name</p>
            <input type="text">
            <p>Password</p>
            <input type="password">
            <input type="Submit" value="LogIn"><button>Register</button>
            <p><a href="">Forget Password</a></p>
            <p><a href="">Not My Account</a></p>
            </form>
        </div>

    </div>

</div>

    @endsection