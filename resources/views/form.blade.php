@extends('layout')
@section('content')


<h2>HTML Forms</h2>
<h2><a href="{{route('list')}}">View Users</a></h2>
<form method="post" action="{{route('saveUser')}}" id="user_submit">
    {{csrf_field()}} <!--generate token for ost validate-->
  User name:<br>
  <input type="text" name="username" value="{{$user->username}}">
  <br>
  Password:<br>
  <input type="password" name="password" value="{{$user->password}}">
  <br>
  Email:<br>
  <input type="email" name="email" value="{{$user->email}}">
  <br>
  Mobile Number:<br>
  <input type="number" name="mobile_no" value="{{$user->mobile_no}}">
  <br><br>
  <input type="hidden" value="{{$user->id}}" name="id">
  <input type="submit" value="Submit">
</form> 


@endsection