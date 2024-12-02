<?php

namespace App\Http\Middleware;

use App\Http\Controllers\PhotoController;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPhotoOwnership
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
        $photoId = $request->route('id');
        $photoController = new PhotoController;
        $photoData = $photoController->photo($photoId);
        $isPhotoOwner = false; // تعيين القيمة الافتراضية
        if (auth()->check()) {
            $auth = Auth::user()->id;
            if (!empty($auth) && ($auth == $photoData['photo']->user_id)) {
                $isPhotoOwner = true; // تعيين القيمة إذا كان المستخدم مالك الصورة
            }
        }

        if ($isPhotoOwner) {
            $request->merge(['photowner' => true]);
        }

        return $next($request);
    }
}
