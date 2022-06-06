<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class delete extends Controller
{
    //
    function del(Request $req){
    $name=$req->input('name');
    db::select("delete from events where name='$name';");
    return redirect("dashboard");
    }
}
