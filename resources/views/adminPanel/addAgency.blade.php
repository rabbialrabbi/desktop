{{--from Route::get('/admim/route/create', 'AdminController@showRoute');--}}

@extends('layout.adminlayout')
@section('variables')
    <?php $active= ['add'=>'is-active', 'add_agency'=>'is-active'] ?>
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
        <h3>Add Agency</h3>
    <form action="/admin/agency" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-4">Name: </div>
            <div class="col-8">
                <input type="text" name="name">
            </div>
        </div>

        <div class="row">
            <div class="col-4">Address: </div>
            <div class="col-8">
                <input type="text" name="address">
            </div>
        </div>

        <div class="row">
            <div class="col-4">Contact: </div>
            <div class="col-8">
                <input type="text" name="contact">
            </div>
        </div>

        <div class="row">
            <div class="col-4">Image: </div>
            <div class="col-8">
                <input type="file" name="image">
            </div>
        </div>

        <div><input type="submit" value="Add Route"></div>
    </form>


    </div>

@endsection

