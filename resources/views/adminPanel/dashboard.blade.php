{{--from Route::get('/admim/route/create', 'AdminController@showRoute');--}}

@extends('layout.adminlayout')
@section('variables')
    <?php $active= ['dashboard'=>'is-active'] ?>
@endsection
@section('subbody')

    <div class="container">
        @if(session('message'))
            <span style="color:red;"> {{session('message')}}</span>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br><br>

    </div>
    <div class="dashboard_chart">
        <canvas id="dashboard_chart" style="margin-right: 100px;" > </canvas>
    </div>

    <div style="padding: 200px;"></div>



    <script>

        let canvas_id = document.getElementById('dashboard_chart').getContext('2d');

        var myLineChart = new Chart(canvas_id, {
            type: 'line',
            data: {
                "labels":["January","February","March","April","May","June","August","September","October","November","December"],
                "datasets":[{
                    "label":"My First Dataset",
                    "data":[65,59,80,81,56,55,40,10,30,50],
                    "fill":false,
                    "borderColor":"rgb(75, 192, 192)",
                    "lineTension":false}]

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

@endsection
