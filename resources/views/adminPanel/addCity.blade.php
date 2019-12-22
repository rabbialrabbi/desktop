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

                <h4 class="mb-5">Add City</h4>

                <form action="/admin/city" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-2">City Name: </div>
                        <div class="col-8">
                            <select name="name" id="">
                                @foreach($cityList as $city)
                                <option value="{{$city}}">{{$city}}</option>
                                    @endforeach
                            </select>
                            @if($errors->has('name'))
                                <span class="text-danger ml-1"> * {{$errors->first('name')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2">Description: </div>
                        <div class="col-8">
                            <textarea name="description" rows="1" cols="40"></textarea>
                            @if($errors->has('description'))
                                <span class="text-danger ml-1"> * {{$errors->first('description')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2">Description Link: </div>
                        <div class="col-8">
                            <input type="text" name="link">
                            @if($errors->has('link'))
                                <span class="text-danger ml-1"> * {{$errors->first('link')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <input type="submit" value="Add City">
                        </div>
                    </div>
                </form>

    </div>


@endsection
