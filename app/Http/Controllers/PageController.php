<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Note;

class PageController extends Controller
{
    public function index(){
      return view('pages.index');
    }

    public function contactSend(request $request){
      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'content' => 'required']);

      $name = $request->input('name');
      $email = $request->input('email');
      $content = $request->input('content');

      $data = array('name'=>$name, 'email'=>$email, 'content'=>$content);

      Mail::send('email.sendEmail', $data, function($message) use($data) {
      $message->to('abc@test.com');
      $message->subject($data['content']);
      $message->from($data['email'] );
  });
      return redirect('/')->with('success', 'mail send');
    }

}
