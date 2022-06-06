<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class database2 extends Controller
{
    //
    function send2(Request $req){
       $data= $req->input();
       $req->validate([
           'title'=>'required',
           'description'=>'required'
       ]);
       $title=$data['title'];
    
       $des=$data['description'];
    
       db::select("insert into news values('$title','$des')");
       return redirect('/');
       
    }
}