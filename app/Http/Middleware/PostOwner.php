<?php

namespace App\Http\Middleware;

use App\Http\Controllers\PostController;
use Closure;

class PostOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

       
        //$postss  =   new PostController;
        //$postsq  =   $postss->index();
        //$posts   =   $postsq['posts'];
        //$imges = $postsq['imges'];
        //$profile = $postsq['profile'];   
        // استخدام المتغيرات هنا
        //dd($next);
        //return $next($request);
        //return view('index', compact('posts','imges','profile'));
        //dd($posts);
   

        return $next($request);
    }
}
