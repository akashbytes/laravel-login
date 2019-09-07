<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Users;
use Session;
use DB;

class UserController extends Controller
{
    public function index()
    {
        if(!Session::get('logged')){
            return view('auth.login');
        }
        else{
            $name = Users::where('id',Session::get('id'))->first();
            $data = array(
                'name'  => $name,
                'title' => 'Index'
            );
            return view('index',$data);
        }
    }

    public function userRegister(Request $request)
    {
        // Validate form request
        $this->validate($request,[
            'name'                  => 'required|min:8',
            'email'                 => 'required|min:4|unique:users',
            'password'              => 'required|min:4',
            'password_confirmation' => 'required|same:password'
        ]);

        // Create new object from Users
        $users = new Users();
        // Add value
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        // Insert value
        $users->save();

        // Set condition
        if(true){
            return redirect('/login')->with('success','Account success registered!');
        }
    }

    public function userLogin(Request $request)
    {   
        // Validate form request
        $this->validate($request,[
            'email' => 'required|min:4',
            'password'  => 'required|min:4'
        ]);
        // Select row by username
        $users = Users::where('email',$request->email)->first();
        // If count == 1
        if($users){
            // Check if password true
            if(Hash::check($request->password,$users->password)){
                // Create Session
                $session = array(
                    'id'    => $users->id,
                    'logged'    => TRUE
                );
                Session::put($session);
                return redirect('/');
            }
            else{
	            return redirect('/login')->with('fail','Password not match!');
	        }  
        }
        // If count == 0
        else{
            return redirect('/login')->with('fail','Account not registered!');
        }   
    }

    public function userUpdate(Request $request,$id)
    {
        // Create new object from Users and get row data by id
        $dataUser = Users::where('id',$id)->first();
        // Set requirement request
        if ($request->name !== null && $request->password !== null && $request->password_confirmation !== null || $request->password !== null && $request->password_confirmation !== null || $request->password !==null && $request->password_confirmation == null || $request->password ==null && $request->password_confirmation !== null){
            // Set validate request
            $this->validate($request,[
                'name'  => 'min:4',
                'password'  => 'min:4',
                'password_confirmation' => 'min:4|same:password'
            ]);
            
            // Check if current password == new password
            if(Hash::make($request->password) == Hash::check($request->password,$dataUser->password)){
                return redirect('/update')->with('fail','New password is same with old password, try different!');
            }else{
                // Update data user with new
                $dataUser->name = $request->name;
                $dataUser->password = Hash::make($request->password);
                $dataUser->update();
                return redirect('/update')->with('success','Successfully update data!');
            }  
        }
        // Check if nothing updated
        elseif ($request->name == $dataUser->name && $request->email == $dataUser->email && $request->password == null && $request->password_confirmation == null){
                return redirect('/update')->with('success','No data updated!');
        }
        // Check if current name !== new name
        elseif($request->name !== $dataUser->name){
            // Update name with new
            $dataUser->name = $request->name;
            $dataUser->update();
            return redirect('/update')->with('success','Successfully update name!');
        }
    }
}
