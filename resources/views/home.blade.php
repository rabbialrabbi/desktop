@extends('layout.layout')

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
    <div id="searchResult" class="formfield">
        <img src= "{{ asset('image/flyair.jpg') }}" alt="BackGround" height="500px">
        <div class="formfield_box">
            <form action="/action_page.php">
                <div class="form-home">
                    <div class="shadow">
                    <div class="form-element">
                    <input class="from" list="from" placeholder="Want to go from">
                    <datalist id="from">

                        @foreach($fromValue as $from)
                            <option value="{{$from}}">
                        @endforeach

                    </datalist>
                    <span></span>
                    </div>
                    <div class="form-element">
                        <input list="to" placeholder="Want to go from">
                        <datalist id="to">

                            @foreach($toValue as $to)
                                <option value="{{$to}}">
                            @endforeach

                        </datalist>
                        <span></span>
                    </div>
                    <div class="form-element">
                        <input list="type" placeholder="Want to go from">
                        <datalist id="type">
                            <option value="Bus">
                        </datalist>
                        <span></span>
                    </div>
                    <div class="form-element">
                        <input type="date">
                    </div>
                    <div class="form-element">
                        <input type="submit">
                    </div>
                    <div class="clr"></div>
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="regular slider wrapper">
        <div><a href=""><img src="image/alhamraLogo.png" alt="alhamra" ></a></div>
        <div><a href=""><img src="image/desh.png" alt="Desh" ></a></div>
        <div><a href=""><img src="image/eagleLogo.png" alt="Eagle" ></a></div>
        <div><a href=""><img src="image/enaLogo.png" alt="Ena" ></a></div>
        <div><a href=""><img src="image/greenline.png" alt="GreenLine" ></a></div>
        <div><a href=""><img src="image/hanifLogo.png" alt="Hanif" ></a></div>
        <div><a href=""><img src="image/nabilLogo.png" alt="Nabil" ></a></div>
        <div><a href=""><img src="image/sakuraLogo.png" alt="Sakura" ></a></div>
        <div><a href=""><img src="image/sAlomLogo.png" alt="S Alom" ></a></div>
        <div><a href=""><img src="image/shohagLogo.png" alt="Shohag" ></a></div>
        <div><a href=""><img src="image/shymoliLogo.png" alt="Shymoli" ></a></div>
        <div><a href=""><img src="image/srlogo.png" alt="SR Travels" ></a></div>
        <div><a href=""><img src="image/trTravels.png" alt="Tr Travels" ></a></div>
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
                            <td><button>Book Now</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="search-result wrapper">
        <div class="heading">
        <h2>Available Route </h2>
        <div class="heading-uline"></div>
        </div>

        <div class="row">
            <div class="col-4">
                @foreach($router as $route)
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    {{ $route->departureCity()->first()->name}} <span> -----------></span>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    {{ $route->arrivalCity()->first()->name}} </br>
                    @endforeach
            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
        </div>





    {{--<div class="list">--}}
        {{--@foreach($data as $d)--}}
        {{--<div class="card wrapper list_betweenSpace">--}}
            {{--<h5 class="card-header">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-9">--}}
                    {{--{{$d->agency}}--}}
                {{--</div>--}}
                {{--<div class="col-3">--}}
                    {{--Date: {{$d->date}}--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</h5>--}}


            {{--<div class="card-body">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-9">--}}
                        {{--<span class="list_component">From: {{$d->from}}</span>--}}
                        {{--<span class="list_component">To: {{$d->to}}</span>--}}
                        {{--<span class="list_component">Price: ${{$d->price}}</span>--}}
                    {{--</div>--}}
                    {{--<div class="col-3 ">--}}
                        {{--<a href="/ticket/{{ $d->id}}/confirm" class= "btn btn-primary list_button" >Request</a>--}}
                        {{--<a href="/ticket/{{ $d->id}}" class="btn btn-primary list_button">Details</a>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
            {{--@endforeach--}}
    {{--</div>--}}

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
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



