<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Validator;
use Auth;
use Response;
use Hash;
use App\User;
use App\Rules\MatchOldPassword;

class LoginController extends Controller
{
    function Dashbordshow()
    {
      return view('dashboard');
    }
    function login(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);
      // dd(Hash::make($password));
      $userdata = array(
        'email' => $request->input('email'),
        'password' =>$request->input('password')
      );
      
      if(Auth::attempt($userdata))
      {
        
         return Response::json(array(
          'code' => 1,    
          'msg'   => "login",
         )); 
      }
      else{
          return Response::json(array(
              'code' => 0,
              'msg'   => "Invalide credential For Login",
           )); 
      }
    }
  
    function logout(Request $request)
    {
      Auth::logout();
     return redirect('/');
    }
    function createchangePassword()
    {
      return view('user.changepassword');
    }
    public function updatechangePassword(Request $request,$id)
      {
        $this->validate($request, [
            'old_password'   => ['required',new MatchOldPassword],
            'new_password'   => 'required',
            'confirm_password'   => ['required','same:new_password'],
           ]);
        $user = User::find($id);
        if($user){
          User::find($id)->update(['password'=> Hash::make($request->new_password)]);
          return Response::json(array(
            'code' => 1,
            'msg'  => "Change password successfully",
          
          )); 
        }else{
          return Response::json(array(
            'code' => 0,
            'msg'   => "error in edit Department"
        )); 
        }
    }
   
}

?>