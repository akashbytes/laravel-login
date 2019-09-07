<?php

use App\Users;
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
// Get Route
Route::get('/register',function(){
	return view('auth.register');
});
Route::get('/login',function(){
	return view('auth.login');
});
Route::get('/','UserController@index');
Route::get('/update',function(){
	$data = Users::where('id',Session::get('id'))
	             ->select('name','email','password')
	             ->first();          
	$array = array(
		'password' => 'secret',
		'title'	=> 'Update',
		'data'	=> $data
	);             
	return view('update',$array);
});
Route::get('/logout',function(){
	Session::flush();

    return redirect('/')->with('success','Successfully Logout');
});

// Post Route
Route::post('/register','UserController@userRegister');
Route::post('/login','UserController@userLogin');
Route::post('/update/{id}','UserController@userUpdate');
