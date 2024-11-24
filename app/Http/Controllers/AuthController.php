<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function doclogin(Request $request){
/*        $valid = $this->rules ($request->all());
        if($valid->fails()){
            return redirect()->back();
        }
        else{
*/        $email = $request->get('email');
        $password = $request->get('password');
            if(Auth::attempt(['email'=>$email,'password'=>$password,'user_type'=>'doctor'])){
                return redirect()->intended('/doctor/dashboard');
            }
            else{
                return redirect()->back();
            }

  //      }

    }



public function rules($data){
$messages=[
'email.required'=> "PLEASE ENTER YOUR EMAIL ADDRESS",
'email.exists'=>"EMAIL ALREADY EXISTS",
'email.email'=>"please enter a valid email",
'password.required'=>"password is required",
'password.win'=>"password must be atleast 6 characters ",

];



$Validator=Validator::make($data,[
    'email'=>'required|email|exists:users',
    'password'=>'required'
],$messages) ;



}   
public function savedoc(Request  $request){
/*    $Validator = $this->rules ($request->all());
    if($Validator->fails()){
        return redirect()->back()->withErrors($Validator)->withInput();
    }
    else{

    }
}

$request->validate([
    'name' => 'required|string|regex:/[a-A-z],{3,16}/i',
    'mail'=>'required|unique:users|regex:/(.+)@(.+)\.(.+)/i',
    'password'=> 'required|min:6|confirmed',
    'password_confirmation'=>'sometimes|required_with:password'
]);
*/
$users=new User([
    'name'=> $request->get('name'),
    'email'=> $request->get('email'),
    'specialization'=> $request->get('specializaton'),
    'password'=> Hash::make($request->get('password')),
    'user_type'=> 'doctor'
    

]);
$users->save();
return redirect()->intended('/doctor/dashboard');




}

}
