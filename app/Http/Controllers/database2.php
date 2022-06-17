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
           'description'=>'required',
           'file'=>'required'
       ]);
       $title=$data['title'];
    
       $des=$data['description'];
       
        $pat=$req->file('file')->getClientOriginalName();
    
       $req->file('file')->storeAs('public/images/',$pat);

       db::select("insert into news values('$title','$des','$pat')");
       return redirect('/event1');
       
    }
}