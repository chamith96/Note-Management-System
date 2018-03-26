@extends('layouts/app')

  @section('content')
    <h1 align="center">Create Note</h1>
    <div style="margin-left:200px;margin-right:200px;">
  <div class="form-group">
    <form action="{{url('note')}}" method="POST">
      {{csrf_field()}}
            <br><input type="text" id="name" name="title" class="form-control" placeholder="Title"> <br>
                <textarea rows="5" id="description" name="note" class="form-control" placeholder="Note"></textarea> <br>
                <input type="submit" value="Post" class="btn btn-primary">
      </form>
  </div>
  @endsection
