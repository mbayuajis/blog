<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getRegister(){
      return view('auth.register');
    }


    public function postRegister( Request $r){
      $user = new User();
      $user->username = $r->input('username');
      $user->email =  $r->input('email');
      $user->password = bcrypt($r->input('password'));
      $user->role_id =



      // $user = new \App\User();
      // $user ->username = Input::get('username');
      // $user ->email = Input::get('email');
      // $user ->password = bcrypt(Input::get('password'));
      // $user ->role_id = DB::table('role')->select('id')->where('namaRole', 'user')->first();


      $user->save();
    }
}
