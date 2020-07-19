<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function checkLogin( Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('home');
        }
        else{
            return back()->with('error', 'Invalid Username or Password');
        }
    }
    function successLogin(){
        return view('home');
    }
    public function register(Request $request){
        $this->validate(request(), [
            'name' => 'required|min:5|max:50',
            'email' => 'required|email',
            'phone_number' => 'required|min:7|max:14',
            'gender' => 'required',
            'date_of_birth' => 'nullable|date:Y-m-d|before:today',
            'password' => 'required|alphanum|confirmed|min:6'
        ]);      

        //$user = User::create(request(['name','email','phone_number','gender','date_of_birth','password']));
        $user = new User();
        $user->name = $request->name;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $pass = $request->password;
        $user->password = Hash::make($pass);

        $user->save();
        
        //return $user;
        return redirect('/login')->with('status', 'Successfully register new account!');
    }
    public function logout(){
        Auth::logout();
        return redirect('/home');
    }
}
