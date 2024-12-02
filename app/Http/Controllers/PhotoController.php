<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\photo;
use App\Photocommente;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    //
    public function img($photos)
    {
        
        $allowedTypes = ['image/jpeg', 'image/jpg','image/png',];
        $maxSizeInKB = 100 * 1024; // 5 MB in KB


        if(is_array($photos)){
            $arr    =[];
            foreach($photos as $photo){
                
    if(!in_array($photo->getMimeType(), $allowedTypes)){

        return response('Invalid image type. Only JPEG or JPG images are allowed');
    }
    
    if($photo->getSize() > $maxSizeInKB){

        return response('Image size exceeds the maximum allowed size of 40 MB');
    }
                
                $arr[]=[ 
                    'name'    =>   $photo->getClientOriginalName(),
                    'path'    =>   $photo->getPathName(),
                    'size'    =>   round(($photo->getSize()/1024))."M",
                    'type'    =>   $photo->getMimeType()
                ];
            }
            return      $this->upluad_img($arr,$photos);
        
        }else{
            
            if(!in_array($photos->getMimeType(), $allowedTypes)){

                return response('Invalid image type. Only JPEG or JPG images are allowed');
            }
            if($photos->getSize() > $maxSizeInKB){
        
                return response('Image size exceeds the maximum allowed size of 5 MB');
            }
        $arr['name']    =   $photos->getClientOriginalName();
        $arr['path']    =   $photos->getPathName();
        $arr['size']    =   round(($photos->getSize()/1024))."M";
        $arr['type']    =   $photos->getMimeType();

      return   $this->upluad_img($arr,$photos) ;
        }
         
    }
    public function upluad_img($imgs,$photos)
    {

         foreach($imgs as $key =>$im){  
            $type   =   '.'.$photos[$key]->getClientOriginalExtension(); 
            $photo =   photo::create([
                'user_id' => auth()->id(),
                'path'    => 'images/users/'.auth()->id().'/', // Assign the temporary user id
                'state'   => 1,
                'album_id'=> 0,
                'type'    => $type,

            ]);
            if ($photo) {
            $photos[$key]->move(public_path($photo->path), $photo->id.$type);
            }

            $img[$key]=array($photo->id);
        
        }
        
        return json_encode($img,JSON_FORCE_OBJECT);

    }
    public function photo($id)
    {
        $photo  =   photo::where('id',$id)->with('user','photocommentes')->firstOrFail();
        $commente=   Photocommente::where('photo_id',$id)->with('users','user','reply')->get();
        if (auth()->check()) {
            $profilee = new UsersController;
            $profile = $profilee->profilenav();
        } else {
            $profile = null;
        }
        return view('/photo',compact('photo','commente','profile'));

    }
    public function profile_pic(Request $request){
            $userId = $request->input('userId');
            $photoId = $request->input('photoId');
            if ($request->hasFile('files')) {
                $photo = $request->file('files');
                $path = $photo->store('images');
                $storedImageName = basename($path);
            
                // اسم الملف
                $name = $storedImageName;
            
                // نوع الملف
                $type = $photo->getMimeType();
            
                // الحجم
                $size = $photo->getSize();
            
                // مسار الملف المخزن
                $storedFilePath = Storage::disk('local')->path($path);
               
                // رمز الخطأ
                $error = $photo->getError() === UPLOAD_ERR_OK ? 0 : $photo->getError();
            
                // إنشاء UploadedFile
                $arr[0] = new UploadedFile($storedFilePath, $name, $type, $error, true);
             
               // dd($arr);
            }else{
            return    dd($request->all());
            }
           // dd($photo);

            $lol= $this->img($arr);
            $img= json_decode($lol, true);
            
            if(empty($request->input('cover'))){
            $user = User::where('id',$userId)->firstOrFail();
            $user->profile_photo_id = $img[0][0];
            $user->save();
            $editphoto = photo::where('id',$img[0][0])->firstOrFail();
            $editphoto->album_id = 1;
            $editphoto->save();
            }else{
                
            $user = User::where('id',$userId)->firstOrFail();
            $user->cover_photo_id = $img[0][0];
            $user->save();
            $editphoto = photo::where('id',$img[0][0])->firstOrFail();
            $editphoto->album_id = 2;
            $editphoto->save();
            }
            //$response = '../photo/'.$userId.'/'.$photoId ;
            //$this->img($response);
            // إرسال الاستجابة
            $url = '../profile/'.$userId;
            return $url;
            //return response( )->Redirect('/');
            //$ee =   redirect('../profile/'.$userId);
            //return redirect('../profile/'.$userId);
            //return redirect()->route('profile', ['id' => $userId])->with('success', $response);

    }
   
}
