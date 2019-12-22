{{--from Route::get('/admim/route/create', 'AdminController@showRoute');--}}

@extends('layout.adminlayout')
@section('variables')
    <?php $active= ['add'=>'is-active', 'add_route'=>'is-active'] ?>
@endsection
@section('subbody')
    <div class="container">
        @if(session('message'))
            <span style="color:red;"> {{session('message')}}</span>
        @endif

        <h3>Add route</h3>
    <form action="/admin/route" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-2">From: </div>
            <div class="col-10">
                <select name="fromCity" id="from">
                    @foreach($cities as $city )
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                        <option value="addCity" onclick="redirectTo()">Add City</option>

                </select>
                @if($errors->has('fromCity'))
                    <span class="text-danger ml-1"> * {{$errors->first('fromCity')}}</span>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">To: </div>
            <div class="col-10">
                <select name="toCity" id="to">
                    @foreach($cities as $city )
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                    <option value="addCity" onclick="redirectTo()">Add City</option>

                </select>
                @if($errors->has('toCity'))
                   <span class="text-danger ml-1"> * {{$errors->first('toCity')}}</span>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">Estimate Distance: </div>
            <div class="col-10">
                <input type="text" name="distance">
                @if($errors->has('distance'))
                   <span class="text-danger ml-1"> * {{$errors->first('distance')}}</span>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">Estimate Time: </div>
            <div class="col-10">
                <input type="text" name="time">
                @if($errors->has('time'))
                   <span class="text-danger ml-1"> * {{$errors->first('time')}}</span>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">Estimate Price: </div>
            <div class="col-10">
                <input type="text" name="price">
                @if($errors->has('price'))
                   <span class="text-danger ml-1"> * {{$errors->first('price')}}</span>
                @endif
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-10">
                <input type="submit" value="Add Route">
            </div>
        </div>
    </form>

    </div>

    <script>
        function redirectTo() {
            window.open('/admin/city/create', '_self');
        }
    </script>

@endsection

