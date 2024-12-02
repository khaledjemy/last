@extends('layout.masterhome')
@section('content')
    <!-- About Section-->
@include('layout.left_sb')
<style>
    body ul.wysihtml5-toolbar{
        background: white !important;
        border: 0px !important;
    }
</style>  
      
<div id="content" class="app-content">   
    <div class="row">
        
        <div class="col-md-8"> 
            <div class="row mb-25px mx-auto bg-white rounded" style="height: 350px;">
                <div class="reels-story h-75">
                    <div class="row no-gutters gx-0 h-100">
                        <ul class="nav nav-tabs  row gx-0 h-25">
                            <li class="nav-item col-md-6">
                                <a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
                                    <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1qx5ct2 xw4jnvo">
                                        <g fill-rule="evenodd" transform="translate(-446 -350)">
                                            <path d="M454.59 355h4.18l-2.4-4h-3.28c-.22 0-.423.008-.624.017L454.59 355zm6.514 0h3.695c-.226-1.031-.65-1.79-1.326-2.489-1.061-1.025-2.248-1.488-4.392-1.511h-.379l2.401 4zm-8.78 0-1.942-3.64c-.73.247-1.315.63-1.868 1.165-.668.69-1.09 1.445-1.315 2.475h5.125zm7.043 7.989a.711.711 0 0 1-.22.202l-4.573 2.671-.05.027a.713.713 0 0 1-1.024-.643v-5.343l.002-.056a.714.714 0 0 1 1.072-.56l4.572 2.67.054.036a.714.714 0 0 1 .167.996zm-12.366-5.99V363.083l.001.03v.112l.005.048h.001c.05 2.02.513 3.176 1.506 4.203 1.102 1.066 2.324 1.525 4.577 1.525h5.99c2.144-.023 3.331-.486 4.392-1.511 1.005-1.04 1.467-2.198 1.517-4.217h.003c.003-.1.005-.1.006-.204l.001-.156V357h-18z">
                                            </path>
                                        </g>
                                    </svg>Reels
                                </a>
                            </li>
                            <li class="nav-item col-md-6">
                                <a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
                                    <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x1qq9wsj x1qx5ct2 xw4jnvo">
                                        <g fill-rule="evenodd" transform="translate(-446 -350)">
                                            <path d="M457 368.832a.5.5 0 0 0 .883.323l1.12-1.332a.876.876 0 0 1 .679-.323h3.522a2.793 2.793 0 0 0 2.796-2.784v-10.931a2.793 2.793 0 0 0-2.796-2.785h-3.454a2.75 2.75 0 0 0-2.75 2.75v15.082zm-1.5 0a.5.5 0 0 1-.883.323l-1.12-1.332a.876.876 0 0 0-.679-.323h-3.522a2.793 2.793 0 0 1-2.796-2.784v-10.931a2.793 2.793 0 0 1 2.796-2.785h3.454a2.75 2.75 0 0 1 2.75 2.75v15.082z">
                                            </path>
                                        </g>
                                    </svg>Story
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content h-100 ">
                        <div class="tab-pane fade active show h-100" id="default-tab-1">
                            <ul class="list-group list-group-horizontal overflow-x-auto overflow-y-hidden h-100 border-0" >    
 @for ($i = 0; $i < 10; $i++)
                                <li class="list-group-item col-md-2 m-1 p-0 g-3  h-100 w-25 rounded">
                                    <a href="#" class="widget-card rounded square h-100 w-100">
                                        <div class="widget-card-cover h-100 w-100 " style="background-image: url('/style/Screenshot 2023-03-09 180627.png')">
                                            <div class="d-flex h-100 align-items-center justify-content-center">
                                                <div class="text-center">
                                                    <div class="text-white fs-14px"><b>PORTRAITS OF</b></div>
                                                    <div class="text-white text-opacity-75 fw-bold">2024</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
    {{ $i }}
@endfor

                            </ul>           
                        </div>
                        <div class="tab-pane h-100 fade " id="default-tab-2" >
                            <ul class="list-group list-group-horizontal overflow-x-auto overflow-y-hidden h-100 border-0" >    
@for ($i = 0; $i < 10; $i++)
                                <li class="list-group-item col-md-2 m-1 p-0 g-3  h-100 w-25 rounded">
                                    <a href="#" class="widget-card rounded square h-100 w-100">
                                        <div class="widget-card-cover h-100 w-100 " style="background-image: url('/style/Screenshot 2023-03-09 180627.png')">
                                            <div class="d-flex h-100 align-items-center justify-content-center">
                                                <div class="text-center">
                                                    <div class="text-white fs-14px"><b>PORTRAITS OF</b></div>
                                                    <div class="text-white text-opacity-75 fw-bold">2024</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
    {{ $i }}
@endfor
                                
                           
                                
                            </ul>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            
            <div class="row mx-auto">
                <div class="inpput-post">
                    
   
                <!-- #modal-dialog -->
                
               
                    <form action="/posts" id="myForm"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <img src="{{asset('style/Screenshot 2023-03-09 180627.png')}}"/>
                        </div>
                        <a href="#modal-dialog"   data-bs-toggle="modal">
                            <input type="text" class="inpotbox px-3" name="post_text" placeholder="What in your mind?" >
                        </a>
                        <hr>
                        <div class="omhassan">
                            <a href="#" ><img src="style/c0dWho49-X3.png" >Live video</a>
                            <a href="#"><img src="style/Ivw7nhRtXyo.png" >Photo/video
                            <input type="file" id="fileInput2" name="files[]" class="card-body opacity-0"   style="display:none;" multiple>
                            </a>
                            <a href="#"><img src="style/Y4mYLVOhTwq.png" >Feeling/activity</a>
                        </div>

                        @error('post_content')
                        <div>{{ $message }}</div>
                        @enderror
                    </form>
                </div>
                </div>
                <div class="row">
              <div id="allpost">
                {{-- {{ $posts->links() }} --}}

                {{-- @dd($posts) --}}

                @foreach ($posts as $post)
            <div class="postes">
                       <div class="col mt-5">
                <div class="timeline text-dark bg-white p-0 m-0">
                    <!-- BEGIN timeline-header -->
                    <div class="timeline-header">
                        <div class="userimage">
                            @if(isset($post->user['photopro']['path']))
                            <img src="{{asset($post->user['photopro']['path'].$post->user['photopro']['id'].$post->user['photopro']['type'])}}" alt=""></div>
                            @else  <img src="" alt=""></div>

                            @endif
                            <div class="username">
                            <a href="/profile/{{$post->user['id']}}">{{$post->user['first_name']}}  {{$post->user['last_name']}}<i class="fa fa-check-circle text-blue ms-1"></i></a>
                            <div class="text-muted fs-12px"><a href="../post/{{$post->id}}"> 8 mins <i class="fa fa-globe-americas opacity-5 ms-1"></i></a></div>
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
                                @if($post->user['id']==Auth::user()->id)
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-edit fa-lg me-1"></i> Edit post</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-user fa-lg me-1"></i> Edit audience</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn on notifications for this post</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-language fa-lg me-1"></i> Turn off translations</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-calendar-alt fa-lg me-1"></i> Turn date</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-archive fa-lg me-1"></i> Move to archive</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-trash-alt fa-lg me-1"></i> Move to Recycle bin</a>
                                @else 
                                <a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn off notifications for this post</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- END timeline-header -->
                    <!-- BEGIN timeline-body -->
                    <div class="timeline-body bg-white p-0 m-0">
                        <!-- timeline-post -->
                        <div class="mb-3">
                            <div class="m-2">
                                    {{$post->post_text}}
                            </div>
                            <div class="row gx-1 container p-0 m-0">
                                
                                @if(count($imges[$post->id])==1)
                                <div class="col-12 p-0 m-0">
                                    <div class="ratio ratio-1x1 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                                    </div>
                                </div>

                                @elseif(count($imges[$post->id])==2)
                                <div class="col-6 p-0 m-0">
                                    <div class="ratio ratio-1x1 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                                    </div>
                                </div>
                                <div class="col-6 p-0 m-0">
                                    <div class="ratio ratio-1x1 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                                    </div>
                                </div>

                                @elseif(count($imges[$post->id])==3)
                                <div class="col-7 p-0 m-0">
                                    <div class="ratio ratio-1x1 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                                    </div>
                                </div>
                                <div class="col-5 p-0 m-0">
                                    <div class="ratio ratio-4x3 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                                    </div>
                                    <div class="ratio ratio-4x3 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}})"></a>
                                    </div>
                                </div>
                                @elseif(count($imges[$post->id])==4)
                                <div class="col-8 p-0 m-0">
                                    <div class="ratio ratio-1x1 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                                    </div>
                                </div>
                                <div class="col-4 p-0 m-0">
                                    <div class="ratio ratio-16x9 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                                    </div>
                                    <div class="ratio ratio-16x9 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}})"></a>
                                    </div>
                                    <div class="ratio ratio-16x9 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}})"></a>
                                    </div>
                                </div>
                                @elseif(count($imges[$post->id])>4)
                                <div class="col-7 p-0 m-0">
                                    <div class="ratio ratio-4x3 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                                    </div>
                                    <div class="ratio ratio-4x3 mt-3px">
                                        <a href="{{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][0][0]->path.'/'.$imges[$post->id][0][0]->id.$imges[$post->id][0][0]->type)}})"></a>
                                    </div>
                                </div>
                                <div class="col-5 p-0 m-0">
                                    <div class="ratio ratio-4x3 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][1][0]->path.'/'.$imges[$post->id][1][0]->id.$imges[$post->id][1][0]->type)}})"></a>
                                    </div>
                                    <div class="ratio ratio-4x3 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][2][0]->path.'/'.$imges[$post->id][2][0]->id.$imges[$post->id][2][0]->type)}})"></a>
                                    </div>
                                    <div class="ratio ratio-4x3 p-0 m-0">
                                        <a href="{{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}}" data-lity="" class="bg-size-cover bg-position-center" style="background-image: url({{asset($imges[$post->id][3][0]->path.'/'.$imges[$post->id][3][0]->id.$imges[$post->id][3][0]->type)}})"></a>
                                    </div>
                                </div>

                                @endif

                               
                            </div>
                        </div>
                
                        <!-- timeline-stats -->
                        <div class="d-flex align-items-center  m-2">
                            <div class="d-flex align-items-center">
                                <span class="fa-stack fs-10px">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-heart fa-stack-1x fa-inverse fs-11px"></i>
                                </span>
                                <span class="fa-stack fs-10px">
                                    <i class="fa fa-circle fa-stack-2x text-blue"></i>
                                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse fs-11px bottom-0 mb-1px"></i>
                                </span>
                                <span class="ms-1">{{count($post['react'])}}</span>
                            </div>
                            <div class="d-flex align-items-center ms-auto ">
                                <div>
                                    <p> 259<span> Shares </span> ???</p> 
                                    </div>
                                <div class="ms-3">
                                    @if(count($post->commentes) > 0)
                                            <p>  {{ count($post->commentes) }} <span>Comments</span></p>
                                        @else
                                            <p></p>
                                        @endif
                                 </div>
                            </div>
                        </div>
                        <!-- timeline-action -->
                        <hr class="my-10px">
                        <div class="d-flex align-items-center fw-bold"> 
                                @php $like = false; @endphp
                                @foreach($post['react'] as $react) 
                                @if(($react->user_id==Auth::user()->id) && ($post->id ==$react->post_id))
                               @php $like=   true;   @endphp
                               @break 
                                @endif
                                @endforeach
                            <a href="javascript:;"
                                class="flex-fill text-decoration-none text-center text-gray-400 like"
                                data-liked="{{$like}}" 
                                data-type_id='1' 
                                data-post_id='{{$post->id}}' 
                                data-user-id='@if(Auth::check()) {{ Auth::user()->id}}@endif' >
                                <button  id="like" 
                                class="btn btn-link text-{{$like?'blue' : 'gray'}}-400 text-decoration-none"  >
                                <i class="fa fa-thumbs-up fa-fw me-3px"></i> Like</button>
                            </a>
                            <a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-400">
                                <i class="fa fa-comments fa-fw me-3px"></i> Comment
                            </a> 
                            <a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-400">
                                <i class="fa fa-share fa-fw me-3px"></i> Share
                            </a>
                        </div>
                        <hr class="mt-10px mb-3">
                        @if(count($post->commentes)>0)
                        @foreach($post->commentes as $comment)

                        <div class="d-flex m-3 row">
                            <div class="col-md-1 my-3 p-2 pt-0" >
                                <a class=" " href="javascript:;">
                                    <img src="{{asset($comment['user']['photopro']['path'].$comment['user']['photopro']['id'].$comment['user']['photopro']['type'])}}" alt="" class="img-fluid rounded-circle p-0 m-0 ">
                                </a>
                            </div>
                            <div class=" col-md-11 m-0 p-0">
                                <div class="my-2 py-2 bg-gray-200 radius_30 mx-2" >
                                    <a href="/profile/{{$comment->user['id']}}" >
                                        <h5 class="mb-1 px-3">{{$comment->user['first_name']}} {{$comment->user['last_name']}}</h5>
                                    </a>
                                    <p class="mb-2 px-3">{{$comment['text_co']}}.</p>
                                </div>
                                <p class="mb-0">
                                    <a href="javascript:;" class="btn btn-sm btn-link me-5px">Like</a>
                                    <a href="javascript:;" class="btn btn-sm btn-link" onclick="openReplyBox()">Reply</a>
                                    <div class="reply-box" style="display: none;">
                                        <form action="/post-reply" method="POST">
                                            @csrf
                                            <div class="ps-2 flex-1 m-2">
                                                <div class="position-relative m-2">
                                                    <textarea name="comment" class="form-control rounded-pill ps-3" placeholder="Write a reply...">{{ $comment->user['first_name'] }} {{ $comment->user['last_name'] }}</textarea>
                                                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                                    <input type="hidden" name="userreplay_id" value="{{ $comment->user['id'] }}">
                                                    <button type="submit">reply</button>
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
                                <div>
                                    @foreach ($comment['replie'] as $item)
                                    <div class="ps-2 flex row m-1 p-1">
                                        <div class="col-md-1 m-1" > 
                                            <a class=" radius_30" href="javascript:;">
                                                <img src="{{asset($item['userreply']['photopro']['path'].$item['userreply']['photopro']['id'].$item['userreply']['photopro']['type'])}}" alt="" class="mw-100">
                                            </a>
                                        </div>
                                        <div class="mx-5 col-md-11">
                                            <a href="/profile/{{$item->userreply['id']}}" ><h5 class="mb-1">{{$item->userreply['first_name']}} {{$item->userreply['last_name']}}</h5></a>
                                            <p class="mb-2">{{$item->reply}}.</p>
                                            <p class="mb-0">
                                            <a href="javascript:;" class="btn btn-sm btn-link me-5px">Like</a>
                                            <a href="javascript:;" class="btn btn-sm btn-link" onclick="openReplyBox()">Reply</a>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                            </div>
                        </div> 
                        @endforeach
                        @endif
                                               <!-- timeline-input -->
                       <div class="row m-1" >                        
                        <form action="/comment"  method="POST" class="d-flex align-items-center">
                            @csrf
                            <div class="col-md-1 my-3 p-3">
                                @if(isset($profile['photopro']->path))
                                <div>
                                    <a class="radius_30" href="javascript:;">
                                        <img src="{{ asset($profile['photopro']->path.$profile['profile_photo_id'].$profile['photopro']->type)}}"  class="rounded-pill">
                                    </a>
                                </div>
                                @else
                                <div>
                                    <a class="w-30px" href="javascript:;">
                                        <img src="" height="35" class="rounded-pill">
                                    </a>
                                </div>
                                @endif
                            </div> 
                            <div class="col-md-11 ps-2 flex-1">
                                <div class="position-relative">
                                    <input type="text" name="comment" class="form-control rounded-pill ps-3 py-2 fs-13px" placeholder="Write a comment...">
                                    <input type="hidden" name="post_id" value="{{$post->id}}" class="form-control rounded-pill ps-3 py-2 fs-13px" placeholder="Write a comment...">
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
                    </div>
                    <!-- END timeline-body -->
                </div>
              </div>
            </div>
                     @endforeach
        </div>
    </div>
</div>
<div class="col-md-4">
            @include('layout.right_sb') 
</div>
</div>
</div>
        
        
        
    
</div>
    
</div>
   
<div style="display: none" id="loading">Loading...<i class="fas fa-truck-loading fa-lg fa-fw"></i></div>
            
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    

$(document).ready(function() {
    var isLoading = false;
    var page = 1;
    $('body').on('scroll', function() {
        isLoading = true;
        if (($('body').scrollTop() + $('body').height()  >= ($(document).height() - 150)) && isLoading != false) {
        //     console.log("scrollTop:", $('body').scrollTop());
        //     console.log("bodyHeight:", $('body').height());
        //     console.log("windowHeight:", $(window).height());
        //     console.log("documentHeight:", $(document).height());

        // console.log("Reached near the bottom of the page");
   // loadMorePosts();
    }

        
    });


    Dropzone.autoDiscover = false;

// Initialize Dropzone
$(".dropzoneDiv").each(function() {
var myDropzone = new Dropzone(this, {
    url: "/dummy", // URL وهمي لأننا سنرسل الملفات من خلال input[type="file"]
    autoProcessQueue: false,
    previewsContainer: "#previewDiv",
    clickable: true,
    previewTemplate: `
        <div class="dz-preview dz-image-preview">
            <div class="dz-image"><img data-dz-thumbnail /></div>
            <div class="dz-details">
                <div class="dz-size"><span data-dz-size></span></div>
                <div class="dz-filename"><span data-dz-name></span></div>
            </div>
            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
            <div class="dz-error-message"><span data-dz-errormessage></span></div>
            <div class="dz-success-mark">
                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Check</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M23.5,31.8431458 L17.0303301,25.3734859 C16.7374369,25.0805927 16.2625631,25.0805927 15.9696699,25.3734859 C15.6767767,25.6663791 15.6767767,26.1412529 15.9696699,26.4341461 L22.9696699,33.4341461 C23.2625631,33.7270393 23.7374369,33.7270393 24.0303301,33.4341461 L37.0303301,20.4341461 C37.3232233,20.1412529 37.3232233,19.6663791 37.0303301,19.3734859 C36.7374369,19.0805927 36.2625631,19.0805927 35.9696699,19.3734859 L23.5,31.8431458 Z" fill="#2ECC71"></path>
                    </g>
                </svg>
            </div>
        </div>
    `,
    init: function() {
        var dropzoneInstance = this;
        var fileInput = document.querySelector("#fileInput");
        //var fileInput2 = document.querySelector("#fileInpu2");
        // عند إضافة ملف إلى Dropzone
        dropzoneInstance.on("addedfile", function(file) {
            var removeButton = Dropzone.createElement("<button class='dz-remove'>Remove file</button>");
            removeButton.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                // إزالة المعاينة للملف
                dropzoneInstance.removeFile(file);
                // تحديث العنصر المخفي
                updateFileInput();
            });

            // إضافة الزر إلى عنصر المعاينة
            file.previewElement.appendChild(removeButton);

            // تحديث العنصر المخفي
            updateFileInput();
        });

        // عند إزالة ملف من Dropzone
        dropzoneInstance.on("removedfile", function(file) {
            // تحديث العنصر المخفي
            updateFileInput();
        });

        function updateFileInput() {
          var  imgsarray=[];
            const dataTransfer = new DataTransfer();
            // إضافة الملفات من Dropzone إلى DataTransfer
            dropzoneInstance.files.forEach(file => {
                dataTransfer.items.add(file);
                imgsarray.push(file)   ;

            });
            // تحديث الملفات في input[type=file]
           // fileInput.files = dataTransfer.files;
            fileInput2.files = dataTransfer.files;
          // console.log(imgsarray); // تحقق من الملفات
            //$('#fileInput2').val(imgsarray);
        }
    }
});
});

        
    // Initialize the WYSIHTML5 editors
    var editors = [];
            $('.wysihtml5').each(function(index) {
                var editor = $(this).wysihtml5({
                    "toolbar": {
                        "font-styles": false,
                        "emphasis": false,
                        "lists": false,
                        "html": false,
                        "link": false,
                        "image": false,
                        "color": false,
                        "blockquote": false,
                        "size": 'sm',
                        "custom": true
                    },
                    "locale": "en-US"
                }).data("wysihtml5").editor;
                editors.push(editor);
            });


            function debounce(func, wait) {
                let timeout;
                return function() {
                    const context = this, args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(context, args), wait);
                };
            }

            function updateEditors(content) {
                editors.forEach(editor => {
                    editor.setValue(content);
                });
            }

            const getContent = debounce(function() {
                var content = this.getValue();
                updateEditors(content);
               // console.log(content);
                document.getElementsByClassName('inpotbox')[0].value=content;
               
            }, 100); 

            editors.forEach(editor => {
                editor.on('change', getContent);
            });         
       
    $(document).on('click', '.like', function(event){  
        var post_id = $(this).data('post_id');
        var user_id = $(this).data('user-id');
        var type_id = $(this).data('type_id');
        var liked = $(this).data("liked");
        var csrfToken = "{{ csrf_token() }}";
        var form = new FormData();
        
        if (!liked) {
            $(this).data('liked', true);
            $(this).find('#like').addClass('text-blue-400').removeClass('text-gray-400');
        } else {
            $(this).data('liked', false);
            $(this).find('#like').addClass('text-gray-400').removeClass('text-blue-400');
        }
        
        form.append('post_id', post_id);
        form.append('user_id', user_id);
        form.append('type_id', type_id);
        form.append('liked', liked);
        form.append('_token', csrfToken);
        
        $.ajax({
            url: '/like',
            type: 'POST',
            data: form,
            processData: false,
            contentType: false,
            success: function(response) {
                $('.response-container').html(response);
            },
            error: function(xhr, status, error) {
                console.log("حدث خطأ أثناء معالجة الطلب");
            }
        }); 
    });

  


    function loadMorePosts() {
        
//page=1;
        isLoading = true;
        $('#loading').show();

        $.ajax({
            url: '/?',
            type: 'GET',
            data: { page: page },
            success: function(response) {
                var response = $(response);
                //console.log(response);
                var newPosts = response.find('#allpost').html();
                $('#loading').hide();
                if (newPosts.trim() !== "") {
                    $('#allpost').append(newPosts);
                    page++;
                }
                isLoading = false;
            },
            error: function(xhr, status, error) {
                console.error(error);
                isLoading = false;
            }
        });
    }
   
        $('#post').click(function(event) {
                event.preventDefault(); // منع الإرسال الافتراضي للنموذج
          var formData  = new  FormData(  $("#myForm")[0]); // استخدام FormData لجمع البيانات والملفات

                $.ajax({
                    url: $("#myForm").attr('action'),
                    type: $("#myForm").attr('method'),
                    data: formData,
                    processData: false, // مهم لتعطيل معالجة البيانات
                    contentType: false, // مهم لتعطيل نوع المحتوى التلقائي
                    success: function(response) {
                        $('#result').html('<p>تم رفع الملف بنجاح!</p>');
                    },
                    error: function(error) {
                        $('#result').html('<p>حدث خطأ أثناء رفع الملف.</p>');
                    }
                });
            });
    
});
</script>
