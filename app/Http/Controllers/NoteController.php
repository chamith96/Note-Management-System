<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\User;
use PDF;

class NoteController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      return view('note.note')->with('note', $user->notes); //$user->notes ;notes is User model function, not database field

      //$note = Note::orderBy('created_at', 'desc')->paginate(5); // view page pagenation: {{$note->links()}}
      //return view('note.note')->with('note',$note);
    }

    //download note pdf file
    public function downloadPDF($id)
    {
      $note = Note::find($id);
      $pdf = PDF::loadView('layouts.pdf', compact('note'));
      return $pdf->download('myNote.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'note' => 'required'
      ]);

        //create post or stored in database
        $note = new Note;
        $note->title = $request->input('title');
        $note->note = $request->input('note');
        $note->user_id = auth()->user()->id;
        $note->save();
        return redirect('/note')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::find($id);
        return view('note.show')->with('note', $note);
        /*
        if(auth()->user()->id != $note->user_id){
          return redirect('/note')->with('$error', 'Unauthorized access');
        }
        */
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);
        return view('note.edit')->with('note', $note);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' => 'required',
        'note' => 'required'
      ]);

        //edit post and store in database
        $note = Note::find($id);
        $note->title = $request->input('title');
        $note->note = $request->input('note');
        $note->save();
        return redirect('/note')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();
        return redirect('/note')->with('success', 'Post deleted');
    }

}
