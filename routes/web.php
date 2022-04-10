<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});
// Route::get('list', 'Users@list');
Route::get('list', function(){
    return view('userlist');
});
Route::get('create', function(){
    return view('create');
});
Route::post('loginsubmit', function(Request $request){
    print_r($request->input());
    // return view('loginsubmit');
});