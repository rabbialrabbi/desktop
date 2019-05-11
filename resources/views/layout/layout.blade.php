<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <title>Document</title>
</head>
<body>
<div class="up-header wrapper">
    <div class="up-header_left">
        <p>E-ticket</p>
    </div>
    <div class="up-header_right">
        <p>+8801223659050</p>
    </div>
</div>

<div class=" navhead">
    <ul class="wrapper">
        <li> @guest
            <li >
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @else

            <li>

                <a  href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
            @if( auth()->user()->email == 'admin@g.com')
                <li >
                    <a href="/admin">{{ __('Admin') }}</a>
                </li>
            @else
                <li >
                    <a href="/user/{{auth()->id()}}">{{ __('Profile') }}</a>
                </li>
                @endif
            @endguest</li>
        <li><a href="/about">About</a></li>
        <li><a href="/client/create">Post</a></li>
        <li style="border-left: none;"><a href="/client">Home</a></li>
    </ul>
</div>

@yield('body')

<div class="footer">
    <p class="wrapper">CopyRight @ 2019</p>

</div>

</body>
</html>






