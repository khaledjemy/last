<?php

namespace App\Http\Controllers;

use App\React;
use Illuminate\Http\Request;

class ReactController extends Controller
{
    //
    public function react(Request $request)
    {
 
        if($request->input('liked')==true)
        {
            
            if($request->input('user_id')==auth()->id()){

            $react = React::where('post_id', $request->input('post_id'))
                    ->where('user_id', $request->input('user_id'))
                    ->first();

            if($react) {
                $react->delete();
                return ;
            }
            
            }
           

        }else{

        
        React::create([

            'type'      =>$request->input('type_id'),
            'post_id'	=>$request->input('post_id'),
            'user_id'   =>$request->input('user_id'),
        ]);

       return ;
    }




    }
    public function react_view($user_id)
    {
        
        $react  = React::where($user_id); 
      

       return ;




    }
}
