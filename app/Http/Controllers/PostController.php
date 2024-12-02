<?php

namespace App\Http\Controllers;

use App\Commente;
use App\Post;
use App\User;
use App\Photo;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('user.photopro', 'commentes.replie.userreply.photopro', 'react', 'commentes.user.photopro')
            ->orderBy('created_at', 'desc')->paginate(3, ['*'], 'page', $request->query('page', $request->page));
        
        $imges = []; 
        
        if ($posts->isNotEmpty()) {
            foreach ($posts as $post) {
                $imges[$post->id] = [];
                $im_arr = json_decode($post->image, true);

                if (is_array($im_arr)) { 
                    foreach ($im_arr as $key => $img) {
                        $imgess = Photo::where('user_id', $post->user_id)->where('id', $img)->get();
                        if ($imgess->isNotEmpty()) {
                            $imges[$post->id][] = $imgess;
                        }
                    }
                }
            }
        }

       
        foreach ($posts as $post) {
            if ($post->user && !$post->user->profile_photo_id) {
                // تعيين الصورة الافتراضية كعلاقة للعرض فقط
                $post->user->setRelation('photopro', Photo::find(3));
            }

            foreach ($post->commentes as $comment) {
                if ($comment->user && !$comment->user->profile_photo_id) {
                    // تعيين الصورة الافتراضية كعلاقة للعرض فقط
                    $comment->user->setRelation('photopro', Photo::find(3));
                }
            }
        }
       
      //dd($posts);
        if (auth()->check()) {
            $profilee = new UsersController;
            $profile = $profilee->profilenav();
        } else {
            $profile = null;
        }

        if ($request->ajax()) {
            
            return view('index', compact('posts', 'imges', 'profile'));
        }

        return view('index', compact('posts', 'imges', 'profile'));
    }

    public function store(Request $request)
    {
   //  echo'<pre>'; print_r($request); echo'</pre>';
    // return;
        $photo = new PhotoController;
        $photos = $request->hasFile('files') ? $request->file('files') : null;

        $validatedData = $request->validate([
            'post_text'  => 'required|max:255',
            'user_id'    => 'null',
            'files.*'    => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $userId = auth()->id();
        $status = true;

        // Create the post with the temporary user id
        $post = Post::create([
            'post_text'    => $validatedData['post_text'],
            'user_id'      => $userId, // Assign the temporary user id
            'status'       => $status,
            'image'        => $photo->img($photos)
        ]);

        return redirect('/')->with('"success"', 'Post created successfully!');
    }

    public function index1($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $user = User::where('id', $post->user_id)->firstOrFail();

        $imges = []; // تأكد من تعريف المتغير $imges قبل استخدامه

        if ($post) {
            $im_arr = json_decode($post->image, true);

            if (is_array($im_arr)) { // تأكد من أن $im_arr هو مصفوفة
                foreach ($im_arr as $key => $img) {
                    $imgess = Photo::where('user_id', $post->user_id)->where('id', $img)->get();

                    if ($imgess->isNotEmpty()) {
                        $imges[$post->id][] = $imgess;
                    }
                }
            }
        }

        if (auth()->check()) {
            $profilee = new UsersController;
            $profile = $profilee->profilenav();
            //dd($profile);
        } else {
            $profile = null;
        }

        return view('post', compact('post', 'user', 'profile', 'imges'));
    }

    public function profile_post($id)
    {
        $posts = Post::where('user_id', $id)->with('commentes.replie', 'user')->get();
        return ($posts);
    }
}
