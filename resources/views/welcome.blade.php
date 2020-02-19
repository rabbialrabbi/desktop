@extends('layouts.testheader')

@section('title','TestHome')
@section('body')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <form action="/admin/agency" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image">
                    <input type="submit" value="submit">
                </form>
    </div>

        @push('scripts')
            <script src="{{asset('js/app.js')}}"></script>
        @endpush

@endsection


