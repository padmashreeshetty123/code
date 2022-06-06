<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class database extends Controller
{
    //
    function send(Request $req){
       $data= $req->input();
       $req->validate([
           'name'=>'required',
           'contact'=>'required',
           'event'=>'required',
           'description'=>'required'
       ]);
       $name=$data['name'];
       $contact=$data['contact'];
       $des=$data['description'];
       $event=$data['event'];
       db::select("insert into events values('$name','$event',$contact,'$des')");
     return redirect('dashboard');
    }
}
