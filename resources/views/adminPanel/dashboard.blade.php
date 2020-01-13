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

        <dashboard-chart v-bind:scores =[10,30,40,80,30,70]></dashboard-chart>

    </div>


    <div style="padding: 200px;"></div>


@endsection
