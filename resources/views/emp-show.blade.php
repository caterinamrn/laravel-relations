@extends('layouts/main-layout')
@section('content')

<h1>Employee:
  {{$emp -> firstname}}
  {{$emp -> lastname}}
</h1>
<ul>
  <li>Date of birth: {{$emp -> date_of_birth}}</li>
  <li>Private code: {{$emp -> private_code}}</li>
  <li>
    Location: {{$emp -> location -> name }}
    ({{$emp -> location -> city }},{{$emp -> location -> state }})
  </li>
  <br>
  <li> Tasks:
    <ul>
      @foreach ($emp -> tasks as $task)
      <li>
        {{$task -> name}}:
        {{$task -> start_date}} -
        {{$task -> end_date}}
      </li>
      @endforeach
    </ul>
  </li>
  <li>
    <a href="{{route('emp-edit',$emp -> id)}}">Edit</a>
    <a href="{{route('emp-destroy',$emp -> id)}}">X</a>
  </li>
</ul>

@endsection
