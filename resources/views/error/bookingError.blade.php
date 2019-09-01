{{--
* Route::post('/ticket/search', 'ticketController@search')->name('home.search');
* for date false vale
 --}}

@extends('layout.layout')

@section('body')

    <div class="wrapper jumbotron error-booking bg-info">
        <h2>{{$errorMessage}}</h2>
    </div>

@endsection
