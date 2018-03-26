@extends('layouts.app')

@section('content')
    <h1 align="center">Edit Note</h1>
      <div style="margin-left:200px;margin-right:200px;">
      <div class="form-group">
          <form action="{{url('note', [$note->id])}}" method="POST">
          {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <br><input type="text" id="name" name="title" class="form-control" value="{{$note->title}}"> <br>
            <textarea rows="5" id="description" name="note" class="form-control">{{$note->note}}</textarea> <br>
            <input type="submit" value="Post" class="btn btn-primary">
          </form>
      </div>
@endsection
