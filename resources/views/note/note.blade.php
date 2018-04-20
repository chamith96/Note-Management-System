@extends('layouts.app')

@section('content')
  <h1 align="center">Notes</h1>

  @if(count($note) > 0)
      <div class="container">
      <div class="list-group">
    @foreach ($note as $notes)
      <h1><a href="/note/{{$notes->id}}" class="list-group-item">{{$notes->title}}</a></h1>
    @endforeach
    </div>
    </div>
    @else
      <div class="col-md-8 col-md-offset-2">
        <div class="panel-heading"><h3>You don't have any note yet.</h3>
        <a href="note/create" class="btn btn-primary">create now</a>
        </div>
      </div>
  @endif

@endsection
