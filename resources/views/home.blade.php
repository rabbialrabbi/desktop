@extends('layout.layout')

@section('title','Home')
@section('menu','home')

@section('body')

    {{--error field--}}
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
    {{--Search form Field--}}
@if(session('errorMessage'))
    <div class="wrapper alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error: </strong> {{session('errorMessage')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif


    <div id="searchResult" class="formfield">
        <img src= "{{ asset('image/flyair.jpg') }}" alt="BackGround" height="600px">

        <div class="formfield_box row">
            <div class="col-sm-1 col-md-2 col-lg-2"></div>
            <div class="col-sm-10 col-md-8 col-lg-8">
                <form action="/ticket/search" method="POST">
                    @csrf
                    <div class="form-home">
                        <div class="form-element">
                            <input class="from" list="from" placeholder="Want to go from" name="city_from" required>
                            <datalist id="from">

                                @foreach($cities as $city)
                                    <option value="{{$city->name}}"></option>
                                @endforeach

                            </datalist>
                            <span></span>
                        </div>
                        <div class="form-element">
                            <input list="to" placeholder="Want to go To" name="city_to" required>
                            <datalist id="to">

                                @foreach($cities as $city)
                                    <option value="{{$city->name}}"></option>
                                @endforeach

                            </datalist>
                            <span></span>
                        </div>
                        <div class="form-element">
                            <input list="type" value="Bus" name="type" required>
                            <datalist id="type">
                                <option value="Bus">
                            </datalist>
                            <span></span>
                        </div>
                        <div class="form-element">
                            <input type="date" name="search_date">
                        </div>
                        <div class="form-element">
                            <input type="submit">
                        </div>
                        <div class="clr"></div>
                    </div>
                </form>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-2"></div>

        </div>

    </div>

      {{--<div class="formfield_box">--}}
            {{--<div class="">--}}
            {{----}}
        {{--</div> --}}
    {{--</div>--}}

    <div class="heading ">
        <h2>Our Valuable Agency</h2>
        <div class="heading-uline"></div>
    </div>
    <div class="regular slider wrapper">
        @foreach($agencies as $agency)

            <div><a href="/agency/{{$agency->id}}"><img src="image/{{$agency->image_name}}" alt="{{$agency->image_name}}" ></a></div>

            @endforeach
    </div>



    <div class="search-result wrapper">
        <div class="heading ">
            <h2>Top Bus Route </h2>
            <div class="heading-uline"></div>
        </div>
        <div class="row">
            <div class="container">

                <table class="table table-hover top-route">
                    <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Distance</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($router as $route)
                        <tr>
                            <td><i class="fa fa-map-marker" aria-hidden="true"> </i>
                                {{ $route->departureCity()->first()->name}}</td>
                            <td><i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{ $route->arrivalCity()->first()->name}}</td>
                            <td>{{$route->est_distance}}</td>
                            <td>{{$route->est_price}}</td>
                            <td><a href="/booking/{{$route->departure_id}}/{{$route->arrival_id}}"><button>Book Now</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="available_city wrapper">
        <div class="heading">
        <h2>Available Route </h2>
        <div class="heading-uline"></div>
        </div>

        <div class="row ">
            <div class="col-4 available_city-col">

                <table>
                    @foreach($router as $route)
                    <tr>
                        <a href=""><td><i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{ $route->departureCity()->first()->name}}</td>
                        <td> ----------></td>
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{ $route->arrivalCity()->first()->name}}</td>
                        </a>
                    </tr>
                    @endforeach
                </table>

            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
        </div>



{{--

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
                        <a href="/ticket/{{ $d->id}}/confirm" class= "btn btn-primary list_button" >Request</a>
                        <a href="/ticket/{{ $d->id}}" class="btn btn-primary list_button">Details</a>
                    </div>
                </div>


            </div>
        </div>
            @endforeach
    </div>

    --}}

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".regular").slick({
                autoplay: true,
                autoplaySpeed: 1000,
                arrows:false,
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1
            });
        });
    </script>


@endsection



