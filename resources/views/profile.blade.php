
	@include('layout.header')
	<!-- ================== END page-css ================== -->

<body>
  
    <!-- BEGIN page-cover -->
	<!-- END page-cover -->

	@include('layout.navbar')
 
	<div id="app" class="app app-header-fixed app-sidebar-fixed app-with-wide-sidebar">
	
		<!-- BEGIN #header -->
		<!-- END #header -->
		<!-- BEGIN #content -->
			<!-- BEGIN profile -->
			<div class="profile bg-white   profile-bg">
                <div class="container col-md-8" >
				<div class="profile-header rounded-bottom">
					<!-- BEGIN profile-header-cover -->
					<div class="profile-header-cover"></div>
					<!-- END profile-header-cover -->
					<!-- BEGIN profile-header-content -->
					<div class="profile-header-content  p_co mb-5" >
						<div class="col-12">
						<img style="height: 100%; width: 100%;" src="{{ asset($profile_page['coverpro']->path.$profile_page['coverpro']->id.$profile_page['coverpro']->type)}}" alt="" />
						</div>
					</div>

					<!-- END profile-header-content -->
				</div>
                <div class="profile  col-md-11 container" >
                    <div class="row">
                        <div class="col-md-3">
                    	<!-- BEGIN profile-header-img -->
						<div class="profile-header-img rounded-circle position-sticky mt-n4">
							<img src="{{ asset($profile_page['photopro']->path.$profile_page['profile_photo_id'].$profile_page['photopro']->type)}}" alt="" style="height:168px;width:168px" class="img-thumbnail rounded-circle" />
						</div>
						<!-- END profile-header-img -->
                        </div>
                        <div class="col-md-4 pt-5">
						<!-- BEGIN profile-header-info -->
						<div class="profile-header-info">
							<h4 class="mt-0 mb-1">{{$profile_page['first_name']}} {{$profile_page['last_name']}}</h4>
							<p class="mb-2">UXUI + Frontend Developer</p>
							<a href="#" class="btn btn-xs btn-yellow">Edit Profile</a>
						</div>
                        </div>
						<div class="col-md-4 pt-5">
							@if($friends[0]==1)
                <div class="btn-group">
                    <a href="#" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">friend
                    <i class="fa fa-user-group"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:;" class="dropdown-item">Action 1</a>
                        <a href="javascript:;" class="dropdown-item">Action 2</a>
                        <a href="javascript:;" class="dropdown-item">Action 3</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:;" class="dropdown-item" >
							<form action="/f_action" method="POST">
							@csrf
							<button name="add" type="submit" class="btn btn-link">
								<input name="user" type="hidden" value="{{$profile_page['id']}}">	
								<input name="type" type="hidden" value="remove">
                    			remove friend
                				</button>
						</form>
					</a>
                    </ul>
                </div>
						@elseif($friends[0]==2)
						<form action="/f_action" method="POST">
							@csrf
							<button name="add" type="submit" class="btn btn-primary">
								<input name="user" type="hidden" value="{{$profile_page['id']}}">	
								<input name="type" type="hidden" value="cancel">
                    			Cancel friend request
                				</button>
						</form>
						@elseif($friends[0]==3)
						<div class="row">
							<div class="col-md-3 m-1">
						<form action="/f_action" method="POST">
							@csrf
							<button name="add" type="submit" class="btn btn-primary">
								<input name="user" type="hidden" value="{{$profile_page['id']}}">	
								<input name="type" type="hidden" value="accept">
								Accept
							</button>
						</form>
							</div>
							<div class="col-md-8 m-1">
						<form action="/f_action" method="POST">
							@csrf
							<button name="add" type="submit" class="btn btn-primary">
								<input name="user" type="hidden" value="{{$profile_page['id']}}">	
								<input name="type" type="hidden" value="cancel_r">
                    			Cancel request
                				</button>
						</form>
							</div>
						</div>
						@elseif($friends[0]==4)
						<form action="/f_action" method="POST">
							@csrf
							<button name="add" type="submit" class="btn btn-primary">
							<input name="user" type="hidden" value="{{$profile_page['id']}}">	
							<input name="type" type="hidden" value="add">
								Add friend
							</button>
						</form>
						@endif
						</div>
                    </div>
						<!-- END profile-header-info -->
                    <hr class='mt-5'>
                        <!-- BEGIN profile-header-tab -->
                            <ul class="profile-header-tab nav nav-tabs bg-white">
                                <li class="nav-item"><a href="#profile-post" class="nav-link active" data-bs-toggle="tab">POSTS</a></li>
                                <li class="nav-item"><a href="#profile-about" class="nav-link" data-bs-toggle="tab">ABOUT</a></li>
                                <li class="nav-item"><a href="#profile-photos" class="nav-link" data-bs-toggle="tab">PHOTOS</a></li>
                                <li class="nav-item"><a href="#profile-videos" class="nav-link" data-bs-toggle="tab">VIDEOS</a></li>
                                <li class="nav-item"><a href="#profile-friends" class="nav-link" data-bs-toggle="tab">FRIENDS</a></li>
                            </ul>
        
                            <!-- END profile-header-tab -->
                    </div>   
			</div>
            </div>    
			<!-- END profile -->
			<!-- BEGIN profile-content -->
            <div class="container col-md-10" >

			<div class="profile-content">
				<!-- BEGIN tab-content -->
				<div class="tab-content p-0">
					
					<!-- BEGIN #profile-post tab -->
					<div class="tab-pane fade show active" id="profile-post">

						<div class="timeline row">
						<!-- BEGIN timeline -->
						<div class="col-4 h-100">
							<div class="row h-100">
							<div class="col-12 bg-white rounded p-4 h-30">
								<p p-4>jkkjkjkjk</p>
								<hr>
							<div>kjkjkjkjkjkkjk</div>
							</div>
							<div class="col-12 bg-white rounded p-4 mt-4 h-50">
								<p p-4>jkkjkjkjk</p>
								<hr>
							<div>kjkjkjkjkjkkjk</div>
							</div>
							<div class="col-12 h-100 mt-5">
								<p p-4></p>
							<div>
							</div>	
							</div>
							</div>
						</div>
					<div class="col-8">
						<div class="row">
							<div class="inpput-postpro mb-4">
								<form action="/posts" method="POST" enctype="multipart/form-data">
									@csrf
								<div>
									<img src="{{asset('style/Screenshot 2023-03-09 180627.png')}}"/>
								</div>
								<input type="text" name="post_text" placeholder="What in your mind?" >
								<hr>
								<div class="omhassan">
									<a href="#" ><img src="{{asset('style/c0dWho49-X3.png')}}" >
										Live video
									</a>
									<a href="#">
									   
											<img src="{{asset('style/Ivw7nhRtXyo.png')}}" >
											Photo/video
									<input type="file" name="files[]" class="card-body opacity-0"  style="position: relative;padding: 0px;width: 200px;top: -35px;" multiple>
											
										
										</a>
									<a href="#"><img src="{{asset('style/Y4mYLVOhTwq.png')}}" >Feeling/activity</a>
								</div>
								<button type="submit">Create</button>
			
								@error('post_content')
								<div>{{ $message }}</div>
												@enderror
								</form>
							</div>
							

							@if(@empty($p_postes))

							@else
                            @foreach ($p_postes as $post)
                
        <div class="col col-12 postespro">
			
                       <div class="col-12">
                <div class="timeline text-dark bg-white col-12">
                    <!-- BEGIN timeline-header -->
                    <div class="timeline-header">
                        <div class="userimage"><img src="{{asset('assets/img/user/user-1.jpg')}}" alt=""></div>
                        <div class="username">
                            <a href="/profile/{{$post->user['id']}}">{{$post->user['first_name']}}  {{$post->user['last_name']}}<i class="fa fa-check-circle text-blue ms-1"></i></a>
                            <div class="text-muted fs-12px"><a href="post/{{$post->id}}"> 8 mins <i class="fa fa-globe-americas opacity-5 ms-1"></i></a></div>
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
                        @foreach($post->commentes as $comment)
                        <div class="d-flex mb-3">
                            <a class="w-45px" href="javascript:;">
                                <img src="{{asset('assets/img/user/user-5.jpg')}}" alt="" class="mw-100 rounded-pill">
                            </a>
                            <div class="flex-1 ps-3">
                                <a href="/profile/{{$comment->user['id']}}" ><h5 class="mb-1">{{$comment->user['first_name']}} {{$comment->user['last_name']}}</h5></a>
                                <p class="mb-2">{{$comment['text_co']}}.</p>
                                <p class="mb-0">
                                    <a href="javascript:;" class="btn btn-sm btn-link me-5px">Like</a>
                                    <a href="javascript:;" class="btn btn-sm btn-link" onclick="openReplyBox()">Reply</a>
                                    <div class="reply-box" style="display: none;">
                                        <form action="/post-reply" method="POST">
                                            @csrf
                                            <div class="ps-2 flex-1">
                                                <div class="position-relative ml-2">
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
                                    <div class="ps-2 flex-2 row">
                                        <div class="col-1" > 
                                      <a class="w-30px" href="javascript:;">
                                            <img src="{{asset('assets/img/user/user-5.jpg')}}" alt="" class="mw-100 rounded-pill">
                                        </a></div>
                                        <div class="position-relative ml-5 col">
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

                                               <!-- timeline-input -->
                        <form action="/comment"  method="POST" class="d-flex align-items-center">
                            @csrf
                            <div><img src="{{asset('assets/img/user/user-13.jpg')}}" height="35" class="rounded-pill"></div>
                            <div class="ps-2 flex-1">
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
                    <!-- END timeline-body -->
                </div>
                        </div>  




        </div>

        @endforeach
		@endif
	</div>
</div>

						</div>
						<!-- END timeline -->
					</div>
					<!-- END #profile-post tab -->
					<!-- BEGIN #profile-about tab -->
					<div class="tab-pane fade" id="profile-about">
						<!-- BEGIN table -->
							<div class="row about bg-white rounded">
								
								<div class="col-4 border-secondary">
							<ul class="nav  flex-column nav-tabs">
								<span ><h1 class="p-3">About</h1></span>

								<li class="nav-item">
								  <a href="#overview" data-bs-toggle="tab" class="nav-link active">Overview</a>
								</li>
								<li class="nav-item">
									<a href="#work_and_education" data-bs-toggle="tab" class="nav-link">Work and education</a>
								  </li>
								  <li class="nav-item">
									<a href="#places_lived" data-bs-toggle="tab" class="nav-link">Places lived</a>
								  </li>
								  <li class="nav-item">
									  <a href="#contact_and_basic_info" data-bs-toggle="tab" class="nav-link">Contact and basic info</a>
								  </li>
								  <li class="nav-item">
									<a href="#family_and_relationships" data-bs-toggle="tab" class="nav-link">Family and relationships</a>
								  </li>
								  <li class="nav-item">
									  <a href="#details_about_you" data-bs-toggle="tab" class="nav-link ">Details about you</a>
								  </li>
								  <li class="nav-item">
									<a href="#life_events" data-bs-toggle="tab" class="nav-link ">Life events</a>
								  </li>
							  </ul>
							</div>
							<div class="col-8 p-5 ">
							  <div class="tab-content panel p-3 rounded-0 rounded-bottom">
								<div class="tab-pane fade active show" id="overview">
								  	...1 overview
								</div>
								<div class="tab-pane fade " id="work_and_education">
									...2 work_and_education
								  </div>
								  <div class="tab-pane fade " id="places_lived">
									...3 places_lived
								  </div>
								  <div class="tab-pane fade " id="contact_and_basic_info">
									...4 contact_and_basic_info
								  </div>
								  <div class="tab-pane fade " id="family_and_relationships">
									...5 family_and_relationships
								  </div>
								  <div class="tab-pane fade " id="details_about_you">
									...6 details_about_you
								  </div>
								  <div class="tab-pane fade " id="life_events">
									...7 life_events
								  </div>
							  </div>
							</div>
							</div>
							<div class="row bg-white rounded mt-4">
								<span><h1 class="p-3">Photo</h1></span>
								<div class="col-12  p-5"></div>
							</div>
					</div>

					<!-- END #profile-about tab -->
					<!-- BEGIN #profile-photos tab -->
					<div class="tab-pane bg-white rounded fade" id="profile-photos">
						<div class="row p-2">
							<div class="col-8"><h1>Photo</h1></div>
							<div class="col-3">
								<form action="photovideo" method="POST" enctype="multipart/form-data">
								<input type="file" name="files[]" style="display: none" id="in"  multiple />
						<label for="in"> <div class="adphoto btn btn-link rounded">Add Photos/Videos</div></label>
						 <button type='submit' class="btn btn-defult rounded">Add</button>

								</form>
							</div>
							
							<div class="col-1">
								<div class="btn-group">
									<a href="#" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">...</a>
									<ul class="dropdown-menu dropdown-menu-end">
									 <li>1</li>
									 <li>2</li>
									 <li>3</li>
									 <li>4</li>
									</ul>
								  </div>
									</div>
						</div>

						<!-- BEGIN gallery-v2 -->
						<div class="gallery-v1" id="gallery">
							<div class="gallery">
								<div class="row">
									@if(count($allphoto) > 0)
									@php $chunks = $allphoto->chunk(4); @endphp <!-- تقسيم الصور إلى صفوف تحتوي كل منها على 4 صور -->
									@foreach($chunks as $chunk)
										<div class="row">
											@foreach($chunk as $photo)
												<div class="col-md-3">
													<div class="image gallery-group-4">
														<a href="../photo/{{$photo->id}}" class="ratio ratio-4x3" data-pswp-src="{{asset($photo->path.'/'.$photo->id.$photo->type)}}" data-pswp-width="1200" data-pswp-height="800">
															<div class="bg-size-cover bg-position-center" style="background-image: url({{asset($photo->path.'/'.$photo->id.$photo->type)}});"></div>
														</a>
													</div>
												</div>
											@endforeach
										</div>
									@endforeach
								@endif

									
									</div>
							</div>
							</div>
						</div>
						<!-- END gallery-v2 -->
					</div>
					<!-- END #profile-photos tab -->
					<!-- BEGIN #profile-videos tab -->
					<div class="tab-pane bg-white rounded fade" id="profile-videos">
						<h4 class="mb-3">Videos (16)</h4>
						<!-- BEGIN row -->
						<div class="row gx-1">
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=RQ5ljyGg-ig" data-lity>
									<img src="https://img.youtube.com/vi/RQ5ljyGg-ig/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=5lWkZ-JaEOc" data-lity>
									<img src="https://img.youtube.com/vi/5lWkZ-JaEOc/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=9ZfN87gSjvI" data-lity>
									<img src="https://img.youtube.com/vi/9ZfN87gSjvI/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=w2H07DRv2_M" data-lity>
									<img src="https://img.youtube.com/vi/w2H07DRv2_M/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=PntG8KEVjR8" data-lity>
									<img src="https://img.youtube.com/vi/PntG8KEVjR8/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=q8kxKvSQ7MI" data-lity>
									<img src="https://img.youtube.com/vi/q8kxKvSQ7MI/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=cutu3Bw4ep4" data-lity>
									<img src="https://img.youtube.com/vi/cutu3Bw4ep4/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=gCspUXGrraM" data-lity>
									<img src="https://img.youtube.com/vi/gCspUXGrraM/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=COtpTM1MpAA" data-lity>
									<img src="https://img.youtube.com/vi/COtpTM1MpAA/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=8NVkGHVOazc" data-lity>
									<img src="https://img.youtube.com/vi/8NVkGHVOazc/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=QgQ7MWLsw1w" data-lity>
									<img src="https://img.youtube.com/vi/QgQ7MWLsw1w/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=Dmw0ucCv8aQ" data-lity>
									<img src="https://img.youtube.com/vi/Dmw0ucCv8aQ/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=r1d7ST2TG2U" data-lity>
									<img src="https://img.youtube.com/vi/r1d7ST2TG2U/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=WUR-XWBcHvs" data-lity>
									<img src="https://img.youtube.com/vi/WUR-XWBcHvs/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=A7sQ8RWj0Cw" data-lity>
									<img src="https://img.youtube.com/vi/A7sQ8RWj0Cw/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
							<!-- BEGIN col-3 -->
							<div class="col-md-3 col-sm-4 mb-1">
								<a href="https://www.youtube.com/watch?v=IMN2VfiXls4" data-lity>
									<img src="https://img.youtube.com/vi/IMN2VfiXls4/mqdefault.jpg" class="d-block w-100" />
								</a>
							</div>
							<!-- END col-3 -->
						</div>
						<!-- END row -->
					</div>
					<!-- END #profile-videos tab -->
					<!-- BEGIN #profile-friends tab -->
					<div class="tab-pane bg-white rounded fade" id="profile-friends">
						<h4 class="mb-3">Friend List (14)</h4>
						<!-- BEGIN row -->
						<div class="row gx-1">
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-1.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">James Pittman</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-2.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Mitchell Ashcroft</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-3.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Ella Cabena</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-4.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Declan Dyson</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-5.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">George Seyler</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-6.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Patrick Musgrove</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-7.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Taj Connal</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-8.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Laura Pollock</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-9.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Dakota Mannix</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-10.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Timothy Woolley</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-11.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Benjamin Congreve</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-12.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Mariam Maddock</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-13.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Blake Gerrald</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
							<!-- BEGIN col-6 -->
							<div class="col-xl-4 col-lg-6 mb-1">
								<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
									<a href="javascript:;">
										<img src="{{asset('assets/img/user/user-14.jpg')}}" alt="" class="rounded" width="64" />
									</a>
									<div class="flex-1 ps-3">
										<b class="text-white">Gabrielle Bunton</b>
									</div>
									<div>
										<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center bg-none" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:;" class="dropdown-item">Action 1</a>
											<a href="javascript:;" class="dropdown-item">Action 2</a>
											<a href="javascript:;" class="dropdown-item">Action 3</a>
											<div class="dropdown-divider"></div>
											<a href="javascript:;" class="dropdown-item">Action 4</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-6 -->
						</div>
						<!-- END row -->
					</div>
					<!-- END #profile-friends tab -->
				</div>
				<!-- END tab-content -->
			</div>
			<!-- END profile-content -->
		</div>

		<!-- END #content -->
        </div>
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
</body>
@include('layout.js')
	<!-- ================== END page-js ================== -->

</html>
<script>
    function openReplyBox() {
      var replyBox = document.querySelector('.reply-box');
      if (replyBox.style.display === 'none') {
        replyBox.style.display = 'block';
      } else {
        replyBox.style.display = 'none';
      }
    }
    </script>