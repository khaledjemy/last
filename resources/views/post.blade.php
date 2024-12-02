@extends('layout.masterhome')


    @section('content')
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 mt-5">
<div class="timeline mt-5"></div>
<div class="timeline text-dark mt-5 bg-white">
    <!-- BEGIN timeline-header -->
    <div class="timeline-header mt-5">
        <div class="userimage"><img src="assets/img/user/user-1.jpg" alt=""></div>
        <div class="username">
            <a href="/profile/{{$user->id}}">{{$user->first_name}} {{$user->last_name}}<i class="fa fa-check-circle text-blue ms-1"></i></a>
            <div class="text-muted fs-12px"><a href="/post/{{$post->id}}" >8 mins <i class="fa fa-globe-americas opacity-5 ms-1"></i></a></div>
        </div>
        <div>
            <a href="#" class="btn btn-lg border-0 rounded-pill w-40px h-40px p-0 d-flex align-items-center justify-content-center bg-transparent text-gray-500" data-bs-toggle="dropdown">
                <i class="fa fa-ellipsis-h"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="fa fa-fw fa-bookmark fa-lg"></i> 
                    <div class="flex-1 ps-1">
                        <div>Save Post</div>
                        <div class="mt-n1 text-gray-500"><small>Add this to your saved items</small></div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-edit fa-lg me-1"></i> Edit post</a>
                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-user fa-lg me-1"></i> Edit audience</a>
                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn off notifications for this post</a>
                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-language fa-lg me-1"></i> Turn off translations</a>
                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-calendar-alt fa-lg me-1"></i> Turn date</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-archive fa-lg me-1"></i> Move to archive</a>
                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-trash-alt fa-lg me-1"></i> Move to Recycle bin</a>
            </div>
        </div>
    </div>
    <!-- END timeline-header -->

    <!-- BEGIN timeline-body -->
    <div class="timeline-body bg-white">
        <!-- timeline-post -->
        <div class="mb-3">
            <div class="mb-2">
                {{$post->post_text}}
            </div>
            <div class="row gx-1 container">
                                
                @if(count($imges[$post->id])==1)
                <div class="col-12">
                    <div class="ratio ratio-1x1">
                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                    </div>
                </div>

                @elseif(count($imges[$post->id])==2)
                <div class="col-6">
                    <div class="ratio ratio-1x1">
                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="ratio ratio-1x1">
                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                    </div>
                </div>

                @elseif(count($imges[$post->id])==3)
                <div class="col-7">
                    <div class="ratio ratio-1x1">
                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                    </div>
                </div>
                <div class="col-5">
                    <div class="ratio ratio-4x3">
                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                    </div>
                    <div class="ratio ratio-4x3">
                        <a href="{{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}})"></a>
                    </div>
                </div>
                @elseif(count($imges[$post->id])==4)
                <div class="col-8">
                    <div class="ratio ratio-1x1">
                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="ratio ratio-16x9">
                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                    </div>
                    <div class="ratio ratio-16x9">
                        <a href="{{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}})"></a>
                    </div>
                    <div class="ratio ratio-16x9">
                        <a href="{{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}})"></a>
                    </div>
                </div>
                @elseif(count($imges[$post->id])>4)
                <div class="col-7">
                    <div class="ratio ratio-4x3">
                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                    </div>
                    <div class="ratio ratio-4x3 mt-3px">
                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                    </div>
                </div>
                <div class="col-5">
                    <div class="ratio ratio-4x3">
                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                    </div>
                    <div class="ratio ratio-4x3">
                        <a href="{{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}})"></a>
                    </div>
                    <div class="ratio ratio-4x3">
                        <a href="{{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}})"></a>
                    </div>
                </div>

                @endif

               
            </div>
        </div>

        <!-- timeline-stats -->
        <div class="d-flex align-items-center  mb-2">
            <div class="d-flex align-items-center">
                <span class="fa-stack fs-10px">
                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                    <i class="fa fa-heart fa-stack-1x fa-inverse fs-11px"></i>
                </span>
                <span class="fa-stack fs-10px">
                    <i class="fa fa-circle fa-stack-2x text-blue"></i>
                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse fs-11px bottom-0 mb-1px"></i>
                </span>
                <span class="ms-1">4.3k</span>
            </div>
            <div class="d-flex align-items-center ms-auto">
                <div>259 Shares</div>
                <div class="ms-3">21 Comments</div>
            </div>
        </div>

        <!-- timeline-action -->
        <hr class="my-10px">
        <div class="d-flex align-items-center fw-bold">
            <a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-400">
                <i class="fa fa-thumbs-up fa-fw me-3px"></i> Like
            </a>
            <a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-400">
                <i class="fa fa-comments fa-fw me-3px"></i> Comment
            </a> 
            <a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-400">
                <i class="fa fa-share fa-fw me-3px"></i> Share
            </a>
        </div>
        <hr class="mt-10px mb-3">

        <!-- timeline-input -->
        <form action="" class="d-flex align-items-center">
            <div><img src="assets/img/user/user-13.jpg" height="35" class="rounded-pill"></div>
            <div class="ps-2 flex-1">
                <div class="position-relative">
                    <input type="text" class="form-control rounded-pill ps-3 py-2 fs-13px" placeholder="Write a comment...">
                    <div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center px-2">
                        <a href="#" class="btn bg-none  shadow-none px-1"><i class="far fa-smile fa-fw fa-lg d-block"></i></a>
                        <a href="#" class="btn bg-none  shadow-none px-1"><i class="fa fa-camera fa-fw fa-lg d-block"></i></a>
                        <a href="#" class="btn bg-none  shadow-none px-1"><i class="fa fa-film fa-fw fa-lg d-block"></i></a>
                        <a href="#" class="btn bg-none  shadow-none px-1"><i class="far fa-sticky-note fa-fw fa-lg d-block"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- END timeline-body -->
</div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
@endsection
 