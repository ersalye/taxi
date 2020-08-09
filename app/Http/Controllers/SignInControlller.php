<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
  
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class SignInControlller extends Controller
{
    //
public $successStatus = 200;

/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 


        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
             
            $success['token'] =  $user->createToken('PicnDrop')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
    public function index()
    {
        return view('user.layout.signin');

    }

	public function passengerSignin()
    {
        return view('user.layout.passengersignin');

    }

}
