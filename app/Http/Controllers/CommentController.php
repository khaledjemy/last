<?php

namespace App\Http\Controllers;

use App\Commente;
use App\Photocommente;
use App\photoreply;
use App\Replie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            
            'comment' => 'required|max:255',
            'post_id' => 'required|max:255',

        ]);
        $userId =   auth()->id();

        
        $comment = Commente::create([
            'text_co' => $validatedData['comment'],
            'user_id'   => $userId, // Assign the temporary user id
            'post_id'     => $validatedData['post_id'],

        ]);

       return redirect('/')->with('"success"', 'Comment successfully!');
    }
    public function photocommentstore(Request $request)
    {
        
        $validatedData = $request->validate([
            
            'comment' => 'required|max:255',
            'photo_id' => 'required|max:255',

        ]);
        $userId =   auth()->id();

        
        $comment = Photocommente::create([
            'comment' => $validatedData['comment'],
            'user_id'   => $userId, // Assign the temporary user id
            'photo_id'     => $validatedData['photo_id'],

        ]);

       

       return redirect('/')->with('"success"', 'Comment successfully!');
    }
    
    public function reply_store(Request $request)
    {   
        
        
        $validatedData = $request->validate([
            
            'comment' => 'required|max:255',
            'comment_id' => 'required|max:255',
            'userreplay_id' => 'required|max:255',

        ]);
        
        $userId =   auth()->id();

        
        $reply = Replie::create([
            
            'comment_id'    => $validatedData['comment_id'],
            'user_id'       => $userId, // Assign the temporary user id
            'userreply_id'  => $validatedData['userreplay_id'],
            'reply'         => $validatedData['comment'],
        ]);
        

       return redirect('/')->with('"success"', 'Comment successfully!');
    }
    
    public function photo_reply_store(Request $request)
    {   
        
        
        $validatedData = $request->validate([
            
            'comment' => 'required|max:255',
            'comment_id' => 'required|max:255',
            'userreplay_id' => 'required|max:255',

        ]);
        
        $userId =   auth()->id();

        
        $reply = photoreply::create([
            
            'comment_id'    => $validatedData['comment_id'],
            'user_id'       => $userId, // Assign the temporary user id
            'userreply_id'  => $validatedData['userreplay_id'],
            'reply'         => $validatedData['comment'],
        ]);
        

       return redirect('/')->with('"success"', 'Comment successfully!');
    }

}
