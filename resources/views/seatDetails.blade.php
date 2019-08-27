{{--from Route::get('/bookingseat/{bus_id}', 'bookingController@showSeat')->name('seat.show');--}}
@extends('layout.layout')

@section('body')

    <div class="wrapper">
        <div class="row wrapper">
            <div class="col-2"></div>
            <div class="col-4 seat">
                <div class="ctr">

                    <div class="row seat-box">
                        <div class="col-4"><div class="get">Gate</div></div>
                        <div class="col-4">Engine</div>
                        <div class="col-4"><img src="{{asset('image/wheel.png')}}" alt="wheel" width="50px" height="45px"></div>
                    </div>

                    @if($bus->seats == 3)
                    @foreach($columns as $column)
                    <div class="row seat-box">
                        <div class="col-3">
                            <div id="seat_id-{{$column['A']->id}}" class="perseat {{$column['A']->status}}" onclick=booking('{{$column["A"]->id}}','{{$column["A"]->name}}','{{$bus->fare}}','{{$column["A"]->status}}')>{{$column['A']->name}}</div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-3">
                            <div id="seat_id-{{$column['B']->id}}" class="perseat {{$column['B']->status}}" onclick=booking('{{$column["B"]->id}}','{{$column["B"]->name}}','{{$bus->fare}}','{{$column["B"]->status}}')>{{$column['B']->name}}</div>
                        </div>
                        <div class="col-3">
                            <div id="seat_id-{{$column['C']->id}}" class="perseat {{$column['C']->status}}" onclick=booking('{{$column["C"]->id}}','{{$column["C"]->name}}','{{$bus->fare}}','{{$column["C"]->status}}')>{{$column['C']->name}}</div>
                        </div>
                    </div>
                        @endforeach
                        @else
                        @foreach($columns as $column)
                            <div class="row seat-box">
                                <div class="col-3">
                                    <div id="seat_id-{{$column['A']->id}}" class="perseat {{$column['A']->status}}" onclick=booking('{{$column["A"]->id}}','{{$column["A"]->name}}','{{$bus->fare}}','{{$column["A"]->status}}')>{{$column['A']->name}}</div>
                                </div>
                                <div class="col-3 seat-box_col-2">
                                    <div id="seat_id-{{$column['B']->id}}" class="perseat {{$column['B']->status}}" onclick=booking('{{$column["B"]->id}}','{{$column["B"]->name}}','{{$bus->fare}}','{{$column["B"]->status}}')>{{$column['B']->name}}</div>
                                </div>
                                <div class="col-3 seat-box_col-3">
                                    <div id="seat_id-{{$column['C']->id}}" class="perseat {{$column['C']->status}}" onclick=booking('{{$column["C"]->id}}','{{$column["C"]->name}}','{{$bus->fare}}','{{$column["C"]->status}}')>{{$column['C']->name}}</div>
                                </div>
                                <div class="col-3">
                                    <div id="seat_id-{{$column['D']->id}}" class="perseat {{$column['D']->status}}" onclick=booking('{{$column["D"]->id}}','{{$column["D"]->name}}','{{$bus->fare}}','{{$column["D"]->status}}')>{{$column['D']->name}}</div>
                                </div>
                            </div>
                        @endforeach

                        @endif
                </div>
                </div>

            <div class="col-6">
                <div class="seat-details_account">
                    <h4>Account</h4>
                    <form action="/booking" method="POST">
                        @csrf()
                    <table class="seat-details_table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th>Fare</th>
                            <th>Amount</th>
                        </tr>
                        <tr>

                        </tr>
                        </thead>
                        <tbody id="tbody">
                        <input type="hidden" name="route_id" value="{{$bus->route_id}}">
                        <input type="hidden" name="bus_id" value="{{$bus->id}}">
                        <input type="hidden" name="fare" value="{{$bus->fare}}">
                        <input type="hidden" name="date" value="{{$booking_date}}">
                        <input type="hidden" name="time" value="{{$bus->departure_time}}">
                        </tbody>
                    </table>


                    <div class="row total_box">
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                        <div class="col-3 text-left">Total</div>
                        <div id="total" class="col-3 text-left">00</div>
                    </div>
                    <div class="row submit_button">
                        <div class="col-1"></div>
                        <div class="col-10"><button type="submit" class="seat-details_table-button">Submit</button></div>
                        <div class="col-1"></div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <script>

        let i = 0 ;

        function booking(seat_id, seat_name, fare, status) {

            let hasClass_booked = $('#seat_id-'+seat_id).hasClass('booked');
            let hasClass_pending = status == 'pending'? true: false;

            if (!hasClass_booked && !hasClass_pending) {
                $('#seat_id-'+seat_id).toggleClass('pending');

                let value_confirmation = document.getElementById(seat_name);

                if(!value_confirmation){
                    $('#tbody').append(`<tr id="`+ seat_name+`"><td>`+seat_name +`</td><td>X</td><td>`+fare+`</td><td>`+fare+`</td><td><input  type="hidden" name="seat_`+seat_name+`" value="`+seat_id+`"></td></tr>`);
                    let body_element = document.getElementById('tbody');
                    let total = 0;
                    for(i=0; i<body_element.rows.length; i++){
                        total = total + parseInt(body_element.rows[i].cells[3].innerHTML);
                    }
                    $('#total').text(total);
                } else{
                    value_confirmation.remove();
                    let body_element = document.getElementById('tbody');
                    let total = 0;
                    for(i=0; i<body_element.rows.length; i++){
                        total = total + parseInt(body_element.rows[i].cells[3].innerHTML);
                    }
                    $('#total').text(total);

                }
            }
        }




    </script>

    @endsection
