{{--from Route::get('/admin/city/create', 'AdminController@showCity');--}}

@extends('layout.adminlayout')
@section('variables')
    <?php $active= ['add'=>'is-active', 'add_city'=>'is-active'] ?>
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
        <form action="/admin/city" method="post">
            @csrf
            <p>Name Of the city : <input type="text" name="name"></p>
            <p>Description : <textarea name="description" rows="1" cols="80">
</textarea></p>
            <p>Description link : <input type="text" name="link"></p>
            <p>Google map x api : <input type="text" name="apix"></p>
            <p>Google map y api : <input type="text" name="apiy"></p>
            <input type="submit" value="Add">
        </form>

    </div>


@endsection
