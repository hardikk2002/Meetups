<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Session;
/*
|---------:----------------------------------------------------------------
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

Route::get('create', function(){
    return view('create');
});

Route::post('loginsubmit', function(Request $request){
    // print_r($request->input());
    // return view('loginsubmit');
    User::select('*')->where(
        [['email', '=', $request->email],
        ['password', '=', $request->password]]
    )->get();
    $request->session()->put('logData', [$request->input()]);
    return redirect('/list');
});
Route::post('createsubmit', function(Request $request){
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->userbio = $request->userbio;
    $user->linkedin = $request->linkedin;
    $user->github = $request->github;
    $user->twitter = $request->twitter;
    if($request->hasfile('pic')){
        $file = $request->file('pic');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/', $filename);
        $user->pic=$filename;
    }
    
    if($user->save()){
        $request->session()->put('logData', [$request->input()]);
        return redirect('/list');
    }
});
    
Route::group(['middleware' => ['logCheck']], function(){
    Route::get('list', function(){
        // return Session()::get('logData');
        $user= User::all();
        return view('userlist', ['user'=>$user]);
    });


});