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

                    @if($seatAline == 3)
                    @foreach($columns as $column)
                    <div class="row seat-box">
                        <div class="col-3">
                            <div id="seat_id-{{$column['A']->id}}" class="perseat {{$column['A']->status}}" onclick=booking('{{$column['A']->id}}','{{$column['A']->name}}',300)>{{$column['A']->name}}</div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-3">
                            <div id="seat_id-{{$column['B']->id}}" class="perseat {{$column['B']->status}}">{{$column['B']->name}}</div>
                        </div>
                        <div class="col-3">
                            <div id="seat_id-{{$column['C']->id}}" class="perseat {{$column['C']->status}}">{{$column['C']->name}}</div>
                        </div>
                    </div>
                        @endforeach
                        @else
                        @foreach($columns as $column)
                            <div class="row seat-box">
                                <div class="col-3">
                                    <div class="perseat">{{$column['A']->name}}</div>
                                </div>
                                <div class="col-3 seat-box_col-2">
                                    <div class="perseat">{{$column['B']->name}}</div>
                                </div>
                                <div class="col-3 seat-box_col-3">
                                    <div class="perseat">{{$column['C']->name}}</div>
                                </div>
                                <div class="col-3">
                                    <div class="perseat">{{$column['D']->name}}</div>
                                </div>
                            </div>
                        @endforeach

                        @endif
                </div>
                </div>
            <div class="col-6">
                <div class="seat-details_account">
                    <h4>Account</h4>
                    <table class="seat-details_table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th>Fare</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody id="tbody">
                        </tbody>
                        <tfoot>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td id="total"></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <script>

        let i = 0 ;
        let total = 0;
        function booking(id, name, fare) {

            let hasClass_booked = $('#seat_id-'+id).hasClass('booked');
            if (!hasClass_booked) {
                $('#seat_id-'+id).toggleClass('pending');

                let value_confirmation = document.getElementById(name);
                if(!value_confirmation){

                    $('#tbody').append(`<tr id="`+ name+`"><td>`+ name +`</td><td>X</td><td>`+fare+`</td><td>`+fare+`</td></tr>`);
                    let body_element = document.getElementById('tbody');

                    for(i=0; i<body_element.rows.length; i++){
                        total = total + parseInt(body_element.rows[i].cells[3].innerHTML);
                    }
                } else{
                    value_confirmation.remove();
                }
                $('#total').text(total);

            }
        }




    </script>

    @endsection
