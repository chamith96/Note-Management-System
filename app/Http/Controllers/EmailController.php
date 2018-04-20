<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;

class EmailController extends Controller
{
  public function messageSend(){
    Mail::to(auth()->user()->email)->send(new Sendmail());
      return redirect('/note');
  }
}
