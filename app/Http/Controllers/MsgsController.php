<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MsgsController extends Controller
{
    public function submit(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' =>'required'
      ]);
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->msg = $request->input('msg');

      //save the messages
      $message->save();

      return redirect('/')->with('success', 'your message has been sent successfully');
    }
  public function GetMsgs()
  {
  $message = Message::all();
  return view('messages')->with('messages', $message);
  }
}
