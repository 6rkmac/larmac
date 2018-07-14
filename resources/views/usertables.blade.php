@extends('layout')
@section('content')

<h2>HTML Table</h2>
<h2><a href="{{route('add')}}">Add New User</a></h2>

@if(Session::has('success'))
<div class="alert alert-danger">
  {{ Session::get('success')}} 
</div>
@endif

<table>
  <tr>
    <th>Username</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th></th>
    <th>Action</th>
  </tr>
  <tbody>
      @foreach($users as $user)
      <tr>
          <td>{{$user->username}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->mobile_no}}</td>
          <td>******</td>
          <td><span><a href="{{route('editUser',['id'=>$user->id])}}">Edit</a></span> <span><a href="{{route('deleteUser',['id'=>$user->id])}}">Delete</a></span> </td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection