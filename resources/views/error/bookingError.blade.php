{{--
* Route::post('/ticket/search', 'ticketController@search')->name('home.search');
* for date false vale
 --}}

@extends('layout.layout')

@section('body')

    <div class="wrapper jumbotron">
        <h1 class="display-4">{{$errorMessage}}</h1>


        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>

@endsection
