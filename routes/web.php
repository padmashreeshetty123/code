<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Database;
use App\Http\Controllers\Database2;
use App\Http\Controllers\Delete;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data= DB::table('news')->get();

    return view('welcome', ['data' =>$data]);
    
});
Route::get('register', function () {
    return view('register');
});
Route::get('event', function () {
    $data=DB::table('news')->get();
    return view('event',['data'=>$data,'count'=>0]);
});
Route::get('about', function () {
    return view('about');
});
Route::get('dashboard', function () {
    $data= DB::table('events')->get();
    $wordCount = $data->count();
    return view('dashboard', ['data' => $data,'count'=>1,'rowcount'=>$wordCount]);

});
Route::get('news', function () {
    return view('news');
});
Route::get('event2', function () {
    $data=DB::table('news')->get();
    return view('event2',['data'=>$data]);
});
Route::get('event1', function () {
    $data=DB::table('news')->get();
    return view('event1',['data'=>$data,'value'=>8000]);
});

Route::post('delete', [delete::class, 'del']);
Route::post('database', [database::class, 'send']);
Route::post('database2', [database2::class, 'send2']);
