@extends('layout.app')
@section('title','SignIn')


@section('content')


<div class="container ">


<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input id="EmailAddress" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input id="password"  type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button onclick="SendData()" type="submit" class="btn btn-primary">Submit</button>
  
</form>
<script type="text/javascript" src={{asset('js/axios.min.js')}}></script>
<script type="text/javascript" src={{asset('js/custom.js')}}></script>
</div>



@endsection
