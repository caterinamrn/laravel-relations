@extends('layouts/main-layout')
@section('content')

<form action="{{ route('emp-store') }}" method="post">
@csrf
@method('POST')

  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" value="{{ $emp -> firstname}}">
  </div>
  <br>
  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" value="{{ $emp -> lastname}}">
  </div>
  <br>
  <div class="form-group">
    <label for="date_of_birth">Date of Birth</label>
    <input type="date" name="date_of_birth" value="{{ $emp -> date_of_birth}}">
  </div>
  <br>
  <div class="form-group">
    <label for="private_code">Private Code</label>
    <input type="text" name="private_code" value="{{ $emp -> private_code}}">
  </div>
  <br>
  <div class="form-group">
    <label for="location_id">Location</label>
    <select name="location_id">
      @foreach ($locs as $loc)
      <option value="{{ $loc -> id}}"

        @if ($loc -> id === $emp -> location -> id):
           selected
        @endif

       >{{ $loc -> name}} ({{ $loc -> city}})</option>
      @endforeach
    </select>
  </div>
  <br>
  <br>
  <button type="submit" name="button">Save</button>

</form>


@endsection
