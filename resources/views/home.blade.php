@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="note/create" class="btn btn-default-primary">Create Note</a>
                    <a href="note/" class="btn btn-default-primary">View Notes</a>
                </div>
            </div>
            <form action="{{ route('send') }}" method="get">
              {{csrf_field()}}<br>
              <input type="submit" class="btn btn-primary" value="Send">
            </form>

        </div>
    </div>
</div>
@endsection
