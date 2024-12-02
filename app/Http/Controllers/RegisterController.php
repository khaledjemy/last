<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    //
    public function reg (Request $request)
        {
            $validate = $request->validate([
                                    'firstname'=>'required|string',
                                    'lastname'=>'required|string',
                                    'emailsignup'=>'required|string|email',
                                    'passwordsignup_confirm'=>'required|string|min:8',
                                 ]);
                                 
            $user   =  User::create([
                'first_name'=>$validate['firstname'],
                'last_name'=>$validate['lastname'],
                'email'=>$validate['emailsignup'],
                'password'=>bcrypt($validate['passwordsignup_confirm'])
             ]);

//dd($user);
     $user->save();
     return redirect('/');
}


}
