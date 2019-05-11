@extends('layout.layout')

@section('body')

   <div class="wrapper">
       <div class="post-form">
           <h1>Post Ticket </h1>
           <hr>

           <h3>Please Fill All information to Post Ticket</h3>

           <form action="/client" method="post">
               @csrf
               <p>Name/Agency: <input type="text" name="agency" ><span class="list-error">  {{ $errors->first('agency') }}</span></p>
               <p>Route Type:  <select name="route" id="">
                       <option value="air">Air</option>
                       <option value="bus">Bus</option>
                       <option value="train">Train</option>
                   </select><span class="list-error">  {{ $errors->first('agency') }}</span> Date: <input type="date" name="date"><span class="list-error">  {{ $errors->first('agency') }}</span></p>
               <p>From : <input type="text" name="from"><span class="list-error">  {{ $errors->first('agency') }}</span> To : <input type="text" name="to"><span class="list-error">  {{ $errors->first('agency') }}</span></p>
               <p>Price: <input type="text" name="price"><span class="list-error">  {{ $errors->first('agency') }}</span></p>

               <input type="submit" value="Post">

           </form>
       </div>
   </div>

@endsection