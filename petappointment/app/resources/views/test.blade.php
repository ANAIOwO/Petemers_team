@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>hospital</td>
          <td>day</td>
          <td>time</td>
          <td>classification</td>
          <td>petsclass</td>
          <td>otherpets</td>
          <td>petsgender</td>
          <td>names</td>
          <td>phonenumber</td>
          <td>remark</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($appointment as $appointments)
        <tr>
            <td>{{$appointments->id}}</td>
            <td>{{$appointments->hospital}}</td>
            <td>{{$appointments->day}}</td>
            <td>{{$appointments->time}}</td>
            <td>{{$appointments->classification}}</td>
            <td>{{$appointments->petsclass}}</td>
            <td>{{$appointments->otherpets}}</td>
            <td>{{$appointments->petsgender}}</td>
            <td>{{$appointments->names}}</td>
            <td>{{$appointments->phonenumber}}</td>
            <td>{{$appointments->remark}}</td>
            
        </tr>
        @endforeach
    </tbody>
    <input type='button' value='Back' onclick="javascript: location.href='/appointment/create'">
  </table>
<div>
@endsection