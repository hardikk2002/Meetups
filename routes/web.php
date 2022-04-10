<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    $user= User::all();
    return view('userlist', ['user'=>$user]);
});
Route::get('create', function(){
    return view('create');
});
Route::post('loginsubmit', function(Request $request){
    // print_r($request->input());
    // return view('loginsubmit');
    return User::select('*')->where(
        [['email', '=', $request->email],
        ['password', '=', $request->password]]
    )->get();
});
Route::post('createsubmit', function(Request $request){
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->linkedin = $request->linkedin;
    $user->github = $request->github;
    $user->twitter = $request->twitter;
    if($user->save()){
        return redirect('/list');
    }
});