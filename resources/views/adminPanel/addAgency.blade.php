{{--from Route::get('/admim/route/create', 'AdminController@showRoute');--}}

@extends('layout.adminlayout')
@section('variables')
    <?php $active= ['add'=>'is-active', 'add_agency'=>'is-active'] ?>
@endsection
@section('subbody')
    @if(session('message'))
        <span style="color:red;"> {{session('message')}}</span>
    @endif
    <div class="container">
{{--        @include('error.errorCheck')--}}
        <h4 class="mb-5">Add Agency</h4>

    <form action="/admin/agency" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-2">Name: </div>
            <div class="col-8">
                <input list="type" name="name" required>
                <datalist id="type">
                    <option value="Other">
                    <option value="Other2">
                    <option value="Other">
                </datalist>
                @if($errors->has('name'))
                    <span class="text-danger ml-1"> * {{$errors->first('name')}}</span>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">Address: </div>
            <div class="col-8">
                <input type="text" name="address">
                @if($errors->has('address'))
                    <span class="text-danger ml-1"> * {{$errors->first('address')}}</span>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">Contact: </div>
            <div class="col-8">
                <input type="text" name="contact">
                @if($errors->has('contact'))
                    <span class="text-danger ml-1"> * {{$errors->first('contact')}}</span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-2">Agency Logo: </div>
            <div class="col-8">
                <input type="file" name="image">

                @if($errors->has('image'))
                    <span class="text-danger ml-1"> * {{$errors->first('image')}}</span>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2"></div>
            <div class="col-8"><p class="text-info">[ Only JPG, JPEG, PNG file can be uploaded ]</p></div>
        </div>


        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-10">
                <input type="submit" value="Add Agency">
            </div>
        </div>
    </form>


    </div>

@endsection

