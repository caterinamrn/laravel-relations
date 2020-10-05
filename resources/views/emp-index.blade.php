@extends('layouts/main-layout')
@section('content')
<br>
<a href="{{route('emp-create')}}">New Emp</a>
<br>
<h1>Employees</h1>
<ul>
  @foreach ($emps as $emp)
  <li>
    <a href="{{route('emp-show', $emp -> id )}}">
      {{$emp -> firstname}}
      {{$emp -> lastname}}
    </a>
  </li>
  @endforeach
</ul>

@endsection
