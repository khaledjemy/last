<?php

namespace App\Http\Controllers;

use App\Messanger;
use App\React;
use App\User;
use Illuminate\Http\Request;

class MessangerController extends Controller
{
    //
    public function messangerlol(Request $request,$id)
    {
        
       $text    = $request->input('text');
       $me      = $request->input('me');
        $me2    = auth()->id();

        $users  =   User::get();
        $user_id=   User::where('id',$id)->firstOrFail();

    if($text!=""){
     
      $message=  Messanger::create([
                                    'message'=> $text,
                                    'user_id'=> $user_id->id,
                                    'my_id'=>$me ,
                                    'read'=> 1
                                ]);
    $message->save();
    return ;
    }
        if (auth()->check()) {
            $profilee = new UsersController;
            $profile = $profilee->profilenav();
        } else {
            $profile = null;
        }
        $viewmassege    = Messanger::with('user')
        ->where(function ($query) use ($user_id, $me2) {
            $query->where('user_id', $user_id->id)
                  ->where('my_id', $me2);
        })->orWhere(function ($query) use ($user_id, $me2) {
            $query->where('user_id', $me2)
                  ->where('my_id', $user_id->id);
        })->orderBy('created_at', 'desc')->paginate(8, ['*'], 'page', $request->query('page', $request->page));

        if ($request->ajax()) {
            return  view('messanger',compact('profile', 'users', 'user_id','viewmassege'));
        }
        
        return view('messanger',compact('profile','users','user_id','viewmassege'));
    }
}
