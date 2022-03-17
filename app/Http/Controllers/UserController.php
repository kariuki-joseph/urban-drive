<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //GET all
    public function index(){

    }
    
    //POST
    public function store(Request $request){

    }

    // GET one
    public function show(Request $request, $id){

    }

    //UPDATE
    public function update(Request $request, $id){

    }

    //DELETE
    public function destroy($id){
        
    }

    //login
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email','=',$email,'and')->where('password','=',$password)->get();

        if(!$user->isEmpty()){
            //set user session
            session(['user'=> $user[0]]);
            return response()->json(array(
                'data'=>array(
                    'status'=>1,
                    'message'=>'Login successful.',
                    'user'=>$user[0]
                )
                ));
        }else{
            //invalid login details
            return response()->json(array(
                'data'=>array(
                    'status'=>false,
                    'message'=>'Invalid login credentials. Please check and try again.'
                )
                ));
        }
    }
    //register
    public function register(Request $request){
        $username = $request->username;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;
        //in case a simmilar user exists
        if(User::where('email',$email)->count()>0){
            return response()->json(array(
                'data'=>array(
                    'status'=>0,
                    'message'=>'A user with this email is already registered.'
                )));
        }
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->phone = $phone;
        $user->password = $password;
        $user->save();
        //set user session
        session(['user'=> $user]);
        return response()->json(array(
            'data'=>array(
                'status'=>true,
                'message'=>'User registered successfully.',
                'user'=>$user
            )
            ));
    }
    //logout
    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect()->back();
    }
}
