@extends('layouts/app')

  @section('content')
    <div class="container">
      <ul class="list-group">
        <li class="list-group-item active"><h1>{{$note->title}}</h1></li>
        <li class="list-group-item"><p>{{$note->note}}</p></li>
      </ul>
        <a href="/note" class="btn btn-default">Back to Note</a>
        <a class="btn btn-primary" href="/note/{{$note->id}}/edit">Edit</a>
        
  @if(auth()->user()->id == $note->user_id)
      <form class="pull-right" action="{{url('note', [$note->id])}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method">
        <input type="submit" class="btn btn-danger" value="Delete">
      </form>
      @endif
    </div>
  @endsection
