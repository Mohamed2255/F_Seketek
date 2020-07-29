<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function contact(){
        return view('users.contact');
    }

    public function messages(){
        $mesaage=Message::all();
        return view('admin.messages',['messages'=>$mesaage]);
    }
    function store(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $msg=$request->message;
        $mesaage=new Message();
        $mesaage->name=$name;
        $mesaage->email=$email;
        $mesaage->phone=$phone;
        $mesaage->message=$msg;
        $mesaage->save();
        return redirect('users/login');  
    }
    public function read(Message $message){
        return view('admin.read',['message'=>$message]);
    }
    function delete($message)
    {
        $msg=Message::findOrFail($message);
        $msg->delete();
        return redirect()->back();
    }
}
