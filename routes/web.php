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
    return view('event');
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

Route::post('delete', [delete::class, 'del']);
Route::post('database', [database::class, 'send']);
Route::post('database2', [database2::class, 'send2']);
