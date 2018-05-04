@extends('layouts/app')

  @section('content')
  <div class="page-header" align="center">
    <img src="images/img1.jpg" alt="note">
    <h3><b>Manage your notes Secure with us.....<br>
      Just log in your cloud profile any time if don't have pen and paper</b></h3>
  </div>


  <div class="container">
    <h2 align="center">Contat Us</h2>
      <form action="{{route('send')}}" method="GET">
        {{csrf_field()}}
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control">
          </div>
            <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control"></textarea>
          </div>
            <button type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>
  <br>

  @endsection
