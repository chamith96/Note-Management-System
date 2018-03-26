@extends('layouts.app')

@section('content')
  <h1 align="center">Notes</h1>
  @if(count($note)>0)
      <div class="container">
      <div class="list-group">
    @foreach ($note as $notes)
      <h1><a href="/note/{{$notes->id}}" class="list-group-item">{{$notes->title}}</a></h1>
    @endforeach
      {{$note->links()}}
    </div>
    </div>
    @else
      <p class="list-group-item">You don't have any note yet...</p>
  @endif
@endsection
