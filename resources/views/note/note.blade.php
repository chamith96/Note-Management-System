@extends('layouts.app')

@section('content')
  <h1 align="center">Notes</h1>
  @if(count($note)>0)
    @foreach ($note as $notes)
      <div class="container">
        <div class="list-group">
            <h1><a href="/note/{{$notes->id}}" class="list-group-item">{{$notes->title}}</a></h1>
        </div>
      </div>
    @endforeach
    @else
      <p class="list-group-item">You don't have any note yet...</p>
  @endif
@endsection
