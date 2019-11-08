<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Myuser; //model
class MyuserController extends Controller
{
    public function Tampil(){
        $myusers = Myuser::all(); //model myusernya

        return view('users.show',[
            'myusers' =>  $myusers
        ]);
    }

    public function SendMessage(Request $request){
        $myuser = new Myuser(); // membuat objek dari model Myuser.php
        
    
        $myuser->firstName = $request->firstName;
        $myuser->lastName = $request->lastName;
        $myuser->emailAddress = $request->emailAddress;
        $myuser->phoneNumber = $request->phoneNumber;
        $myuser->message = $request->message;
        


        $myuser->save(); //simpan ke db

        return redirect()->Route('show');

    }

    public function Hapus($id){
        $myuser = Myuser::find($id);
        $myuser->delete();
        return redirect()->Route('show');
    }
}
