@extends('layout.masterhome')
    @section('content')
    <style>
        
        .photo_gallery {
          background-color: black;
          height: 100%;
        }
        .image-container {
          position: relative;
          width: 100%;
          height: 500px; /* قم بتعيين ارتفاع الصورة حسب الحاجة */
        }
        .image-container img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
        .prev, .next {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          background-color: rgba(255, 255, 255, 0.5);
          color: black;
          font-size: 24px;
          padding: 10px 20px;
          border: none;
          cursor: pointer;
          transition: background-color 0.3s ease;
          border-radius:50%; 
        }
        .prev:hover, .next:hover {
          background-color: rgba(255, 255, 255, 0.8);
        }
        .prev {
          left: -100px;
        }
        .next {
          right: -100px;
        }
      </style>
    <div class="row">
        <div class="col-12 h-100 p-0">
<div class="timeline mt-5"></div>

<!--  gallery -->
<div class="row">
    <div class="col-3 p-0">
        <div class="timeline text-dark bg-white">
            <!-- BEGIN timeline-header -->
            <div class="timeline-header">
                <div class="userimage"><img src="assets/img/user/user-1.jpg" alt=""></div>
                <div class="username">
                    <a href="/profile/#">{{$photo->user['first_name']}} {{$photo->user['last_name']}}<i class="fa fa-check-circle text-blue ms-1"></i></a>
                    <div class="text-muted fs-12px"><a href="#" >8 mins <i class="fa fa-globe-americas opacity-5 ms-1"></i></a></div>
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
                        @if(request()->photowner)
                        <a href="#" class="dropdown-item"><i class="fa fa-fw fa-edit fa-lg me-1"></i> Edit Photo</a>
                        <a href="#modal-message" data-bs-toggle="modal" class="dropdown-item make-profile-picture" data-user-id="{{$photo->user['id']}}" data-photo-id="{{$photo->id}}"><i class="fa fa-fw fa-user fa-lg me-1"></i> Make profile picture</a>
                        <a href="#modal-messagec" data-bs-toggle="modal" class="dropdown-item make-profile-cover" data-user-id="{{$photo->user['id']}}" data-photo-id="{{$photo->id}}"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Make profile Cover</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn off notifications for this post</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-fw fa-language fa-lg me-1"></i> Turn off translations</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="fa fa-fw fa-archive fa-lg me-1"></i> Move to archive</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-fw fa-trash-alt fa-lg me-1"></i> Move to Recycle bin</a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- END timeline-header -->
        
            <!-- BEGIN timeline-body -->
            <div class="timeline-body bg-white">
                <!-- timeline-post -->
                <div class="mb-3">
                    <div class="mb-2">
                    </div>
                    <div class="row gx-1">

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
                    @foreach($commente as $comment)
                    <div class="d-flex mb-3">
                        <a class="w-60px" href="javascript:;">
                            <img src="assets/img/user/user-5.jpg" alt="" class="mw-100 rounded-pill">
                        </a>
                        <div class="flex-1 ps-3">
                            <a href="/profile/{{$comment->user['id']}}" ><h5 class="mb-1">{{$comment->user['first_name']}} {{$comment->user['last_name']}}</h5></a>
                            <p class="mb-2">{{$comment['comment']}}.</p>
                            <p class="mb-0">
                                <a href="javascript:;" class="btn btn-sm btn-link me-5px">Like</a>
                                <a href="javascript:;" class="btn btn-sm btn-link" onclick="openReplyBox()">Reply</a>
                            </p>
                            <div class="reply-box" style="display: none;">
                                <form action="/photo-reply" method="post">
                                    @csrf
                                    <div class="ps-2 flex-1">
                                        <div class="position-relative ml-2">
                                            <textarea name="comment" class="form-control rounded-pill ps-3 py-2 fs-13px" placeholder="Write a reply...">{{ $comment->user['first_name'] }} {{ $comment->user['last_name'] }}</textarea>
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
                                @foreach ($comment['reply'] as $item)
                            <div class="ps-2 flex-2 row">
                                <div class="col-1" > 
                              <a class="w-30px" href="javascript:;">
                                    <img src="assets/img/user/user-5.jpg" alt="" class="mw-100 rounded-pill">
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
                <form action="/commentphoto" method="POST" class="d-flex align-items-center">
                    @csrf
                    <div><img src="assets/img/user/user-13.jpg" height="35" class="rounded-pill"></div>
                    <div class="ps-2 flex-1">
                        <div class="position-relative">
                            <input type="text" name="comment" class="form-control rounded-pill ps-3 py-2 fs-13px" placeholder="Write a comment...">
                            <input type="hidden" name="photo_id" value="{{$photo->id}}" class="form-control rounded-pill ps-3 py-2 fs-13px" placeholder="Write a comment...">
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
    <div class="col-9 p-0">
<div class="photo_gallery">

        
<div class="container ">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="image-container">
          <img src="{{asset($photo->path.'/'.$photo->id.$photo->type)}}" alt="Image">
          <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
          <button class="next" onclick="plusSlides(1)">&#10095;</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--end gallery-->  
        </div>
        <div class="col-md-3">
            <div class="response-container"></div>
        </div>
    </div>

    <!-- toggler -->

<!-- #modal-dialog -->
<div class="modal modal-message fade mt-5" id="modal-message">
    <div class="modal-dialog h-100 ">
        <div class="modal-content h-75 mt-5">
            <div class="modal-header">
                <h4 class="modal-title">crop your profile pic</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body h-100">
                <div >
                    <img id="image" src="#" class="h-100" alt="Image">
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary" data-user-id="{{$photo->user['id']}}" data-photo-id="{{$photo->id}}" id="cropButton">Save  Profile Picture </a>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-message fade mt-5" id="modal-messagec">
    <div class="modal-dialog h-100 ">
        <div class="modal-content h-75 mt-5">
            <div class="modal-header">
                <h4 class="modal-title">crop your profile Cover</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body h-100">
                <div >
                    <img id="imagec" src="#" class="h-100" alt="Image">
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary" data-user-id="{{$photo->user['id']}}" data-photo-id="{{$photo->id}}" id="cropButton2">Save  Cover Picture </a>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
      var cropper;
  
      $('.make-profile-picture').click(function(e){
          e.preventDefault();
          var userId = $(this).data('user-id');
          var photoId = $(this).data('photo-id');
          var path = '{{$photo->path}}'; // يجب التأكد من أن هذا المسار صحيح
          var type = '{{$photo->type}}'; // يجب التأكد من أن هذا النوع صحيح
          var imageSrc = '../'+path+photoId+type;
  
          $('#image').attr('src', imageSrc); // تعيين مسار الصورة إلى src مباشرة
        
          if (cropper) {
              cropper.destroy(); // تدمير Cropper.js السابق إذا كان موجودًا
          }

          cropper = new Cropper(document.getElementById('image'), {
              aspectRatio: 1, // جعل مربع القص دائريًا
              viewMode: 1, // عرض الصورة كاملة داخل مربع القص
              autoCropArea: 0.9, // تعيين نسبة منطقة القص الافتراضية إلى الصورة بنسبة 70%
              responsive: false, // جعل Cropper.js متجاوبًا مع أحجام الشاشة المختلفة
              cropBoxResizable: false, // منع تغيير حجم مربع القص بالسحب
              cropBoxWidth: 400, // تحديد عرض مربع القص بـ 400 بكسل
              cropBoxHeight: 400 // تحديد ارتفاع مربع القص بـ 400 بكسل

          })
         
            // إضافة CSS لتطبيق الشكل الدائري على مربع القص
            setTimeout(function() {
            $(".cropper-view-box").css({
                "border-radius": "50%", // جعل الزوايا دائرية
                "overflow": "hidden" // إخفاء الزوايا الزائدة
            });
        }, 1000);
           
      });

      $('#cropButton').on('click', function(){
          
          var userId = $(this).data('user-id');
          var photoId = $(this).data('photo-id');
          var path = '{{$photo->path}}'; // يجب التأكد من أن هذا المسار صحيح
          var typee = '{{$photo->type}}'; // يجب التأكد من أن هذا النوع صحيح
          var imageSrc = '../'+path+photoId+typee;
          var csrfToken = "{{ csrf_token() }}";
          var croppedCanvas = cropper.getCroppedCanvas();
          if (!croppedCanvas) {
              alert("الرجاء تحديد وقص الصورة أولاً.");
              return;
          }
            var imageData = croppedCanvas.toDataURL("image/jpeg");
            var file = dataURItoBlob(imageData);
            var filee = new File([file], "cropped_image.jpg", { type: "image/jpeg" });

        var formData = new FormData();
            formData.append('croppedImage', filee,'cropped_image.jpg');
            formData.append('userId', userId);
            formData.append('photoId', photoId);
            formData.append('_token', csrfToken);
            formData.append("files", filee,'cropped_image.jpg');
        $.ajax({
            url: "{{ url('/make-profile-picture') }}",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('.response-container').html(response);
                window.location.href=response;
            },
            error: function(xhr, status, error) {
                console.log("حدث خطأ أثناء معالجة الطلب");
            }
        });
        

      
        function dataURItoBlob(dataURI) {
            var byteString = atob(dataURI.split(',')[1]);
            var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
            var ab = new ArrayBuffer(byteString.length);
            var ia = new Uint8Array(ab);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            var blob = new Blob([ab], {type: mimeString});
            return blob;
        }

        
            });


            $('.make-profile-cover').click(function(e){
            e.preventDefault();
          var userId = $(this).data('user-id');
          var photoId = $(this).data('photo-id');
          var path = '{{$photo->path}}'; // يجب التأكد من أن هذا المسار صحيح
          var type = '{{$photo->type}}'; // يجب التأكد من أن هذا النوع صحيح
          var imageSrc = '../'+path+photoId+type;
  
          $('#imagec').attr('src', imageSrc); // تعيين مسار الصورة إلى src مباشرة
  
          if (cropper) {
              cropper.destroy(); // تدمير Cropper.js السابق إذا كان موجودًا
          }
  
          cropper = new Cropper(document.getElementById('imagec'), {
            aspectRatio: 7/ 4, // 400 / 300
              viewMode: 1, // عرض الصورة كاملة داخل مربع القص
              autoCropArea: 1, // تعيين نسبة منطقة القص الافتراضية إلى الصورة بنسبة 70%
              responsive: false, // جعل Cropper.js متجاوبًا مع أحجام الشاشة المختلفة
              cropBoxResizable: false, // منع تغيير حجم مربع القص بالسحب
              cropBoxWidth: 700, // تحديد عرض مربع القص بـ 400 بكسل
              cropBoxHeight: 400 // تحديد ارتفاع مربع القص بـ 400 بكسل
              });
  
      });
  
      $('#cropButton2').on('click', function(){
          
          var userId = $(this).data('user-id');
          var photoId = $(this).data('photo-id');
          var path = '{{$photo->path}}'; // يجب التأكد من أن هذا المسار صحيح
          var typee = '{{$photo->type}}'; // يجب التأكد من أن هذا النوع صحيح
          var imageSrc = '../'+path+photoId+typee;
          var csrfToken = "{{ csrf_token() }}";
          var croppedCanvas = cropper.getCroppedCanvas();
          if (!croppedCanvas) {
              alert("الرجاء تحديد وقص الصورة أولاً.");
              return;
          }
            var imageData = croppedCanvas.toDataURL("image/jpeg");
            var file = dataURItoBlob(imageData);
            var filee = new File([file], "cropped_image.jpg", { type: "image/jpeg" });



        var formData = new FormData();
            formData.append('croppedImage', filee,'cropped_image.jpg');
            formData.append('userId', userId);
            formData.append('photoId', photoId);
            formData.append('_token', csrfToken);
            formData.append("files", filee,'cropped_image.jpg');
            formData.append("cover", true);
        $.ajax({
            url: "{{ url('/make-profile-picture') }}",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('.response-container').html(response);
                window.location.href=response;
            },
            error: function(xhr, status, error) {
                console.log("حدث خطأ أثناء معالجة الطلب");
            }
        });
        

      
        function dataURItoBlob(dataURI) {
            var byteString = atob(dataURI.split(',')[1]);
            var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
            var ab = new ArrayBuffer(byteString.length);
            var ia = new Uint8Array(ab);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            var blob = new Blob([ab], {type: mimeString});
            return blob;
        }
        
            });
            
        });

  </script>
  
        <!-- <script>
    function openReplyBox() {
      var replyBox = document.querySelector('.reply-box');
      if (replyBox.style.display === 'none') {
        replyBox.style.display = 'block';
      } else {
        replyBox.style.display = 'none';
      }
    }
    </script>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);
    
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
    
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
      }

      
    </script>

    <script>
        $(document).ready(function(){
    $('.make-profile-picture').click(function(e) {
        e.preventDefault();
        var userId = $(this).data('user-id');
        var photoId = $(this).data('photo-id');
        var csrfToken = "{{ csrf_token() }}";
        $.ajax({
            url: "{{ url('/make-profile-picture') }}",
            method: 'POST',
            data: {
                userId: userId,
                photoId: photoId,
                _token: csrfToken
            },
            success: function(response) {
                // تحديث الصفحة بالرد HTML
                $('.response-container').html(response.html);
            },
            error: function(xhr, status, error) {
                console.log("حدث خطأ أثناء معالجة الطلب");
            }
        });
    });
});
        </script> -->