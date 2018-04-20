@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="{{ route('send') }}" method="GET">
      {{csrf_field()}}<br>
    <input type="submit" class="btn btn-primary" value="Send">
    </form>
  </div>
@endsection
