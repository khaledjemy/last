@extends('layout.masterhome')
    @section('content')
    <div id="content" class="app-content pt-2 mt-5">
        <div class="messenger" id="messenger">
            <div class="messenger-menu">
                <div class="messenger-menu-item my-2">
                    <a href="#" class="messenger-menu-link">
                        <div class="m-n1">
                            <img alt="" src="assets/img/user/user-13.jpg" class="w-100 d-block rounded-circle">
                        </div>
                    </a>
                </div>
                
                <div class="messenger-menu-item active">
                    <a href="#" class="messenger-menu-link">
                        <span class="iconify fs-30px" data-icon="solar:dialog-2-bold-duotone"></span>
                    </a>
                </div>
                <div class="messenger-menu-item">
                    <a href="#" class="messenger-menu-link">
                        <span class="iconify fs-30px" data-icon="solar:notebook-bold-duotone"></span>
                    </a>
                </div>
                <div class="messenger-menu-item">
                    <a href="#" class="messenger-menu-link">
                        <span class="iconify fs-30px" data-icon="solar:box-minimalistic-bold-duotone"></span>
                    </a>
                </div>
                <div class="messenger-menu-item">
                    <a href="#" class="messenger-menu-link">
                        <span class="iconify fs-30px" data-icon="solar:folder-with-files-bold-duotone"></span>
                    </a>
                </div>
                <div class="messenger-menu-item">
                    <a href="#" class="messenger-menu-link">
                        <span class="iconify fs-30px" data-icon="solar:clapperboard-play-bold-duotone"></span>
                    </a>
                </div>
                <div class="messenger-menu-item">
                    <a href="#" class="messenger-menu-link">
                        <span class="iconify fs-30px" data-icon="solar:settings-bold-duotone"></span>
                    </a>
                </div>
            </div>
            <div class="messenger-chat">
                <div class="messenger-chat-header d-flex">
                    <div class="flex-1 position-relative">
                        <input type="text" class="form-control border-0 bg-light ps-30px" placeholder="Search">
                        <i class="fa fa-search position-absolute start-0 top-0 h-100 ps-2 ms-3px d-flex align-items-center justify-content-center"></i>
                    </div>
                    <div class="ps-2">
                        <a href="#" class="btn border-0 bg-light shadow-none">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="messenger-chat-body">
                    <div data-scrollbar="true" data-height="100%" class="ps ps--active-y" style="height: 100%;">
                        <div class="messenger-chat-list">
                            
                            @foreach($users as $user)
                            <div class="messenger-chat-item {{($user->id==$user_id->id)?'active':''}}">
                                <a href="../messanger/{{$user->id}}" class="messenger-chat-link" data-toggle-class="messenger-chat-content-mobile-toggled" data-target="#messenger">
                                    <div class="messenger-chat-media">
                                        <img alt="" src="assets/img/user/user-1.jpg">
                                    </div>
                                    <div class="messenger-chat-content">
                                        <div class="messenger-chat-title">
                                            <div>{{$user->first_name}} {{$user->last_name}}</div>
                                            <div class="messenger-chat-time">09:15 A</div>
                                        </div>
                                        <div class="messenger-chat-desc"> Hey, how was your weekend?</div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                    </div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 596px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 480px;">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="messenger-content">
                <div class="widget-chat">
                    <!-- BEGIN widget-chat-header -->
                    <div class="widget-chat-header">
                        <div class="d-block d-lg-none">
                            <button type="button" class="btn border-0 shadow-none" data-toggle-class="messenger-chat-content-mobile-toggled" data-target="#messenger">
                                <i class="fa fa-chevron-left fa-lg"></i>
                            </button>
                        </div>
                        <div class="widget-chat-header-content">
                            <div class="fs-5 fw-bold">Company Discussion Group (9)</div>
                        </div>
                        <div class="">
                            <button type="button" class="btn border-0 shadow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis fa-lg"></i>
                            </button>
                            <ul class="dropdown-menu" style="">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- END widget-chat-header -->
                    <!-- BEGIN widget-chat-body -->
                   
                 <div id="chat" class="widget-chat-body ps ps--active-y overflow-auto" data-scrollbar="true" data-height="100%" style="height: 100%;">
                   @php
                  $reservarr = $viewmassege->reverse();
                  
                    @endphp
                    @foreach($reservarr as $message)
                    <div class="widget-chat-item with-media {{$message->user_id==$user_id->id? 'end': 'start'}}">
                        <div class="widget-chat-media">
                            <img alt="" src="assets/img/user/user-2.jpg">
                        </div>
                        <div class="widget-chat-info" id="chat1">
                            <div class="widget-chat-info-container">
                                <div  class="widget-chat-name text-indigo">{{$message['user']->first_name}} {{$message['user']->last_name}}</div>
                                <div class="widget-chat-message"> {{$message->message}} </div>
                                <div class="widget-chat-time">09:20AM</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="ps__rail-x" style="left: 0px; bottom: -1400px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                        </div>
                    </div>
                    <div class="ps__rail-y" style="top: 1400px; height: 473px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 353px; height: 119px;">
                        </div>
                    </div>
                </div>
                    <!-- END widget-chat-body -->
                    <!-- BEGIN widget-input -->
                    <div class="widget-chat-input">
                        <div class="widget-chat-toolbar">
                            <a href="#" class="widget-chat-toolbar-link">
                                <span class="iconify fs-26px" data-icon="solar:smile-circle-outline"></span>
                            </a>
                            <a href="#" class="widget-chat-toolbar-link">
                                <span class="iconify fs-26px" data-icon="solar:folder-with-files-outline"></span>
                            </a>
                            <a href="#" class="widget-chat-toolbar-link">
                                <span class="iconify fs-26px" data-icon="solar:scissors-square-outline"></span>
                            </a>
                            <a href="#" class="widget-chat-toolbar-link">
                                <span class="iconify fs-26px" data-icon="solar:chat-round-dots-outline"></span>
                            </a>
                            <a href="#" class="widget-chat-toolbar-link ms-auto">
                                <span class="iconify fs-26px" data-icon="solar:phone-calling-outline"></span>
                            </a>
                            <a href="#" class="widget-chat-toolbar-link">
                                <span class="iconify fs-26px" data-icon="solar:videocamera-record-outline"></span>
                            </a>
                        </div>
                        
                       
                        <div class="row" id="sendbo" >
                            <div class="col-10">
                                <textarea  name="text" class="form-control">
                                </textarea>
                                <input type="hidden" value="{{Auth::user()->id}}" name="me">
                                <input type="hidden" value="{{$user_id->id}}" name="you">
                            </div>
                            <div class="col">
                                <input type="submit" class="btn btn-primary" value="enter">
                            </div>
                        </div>
                       
                    </div>
                    <!-- END widget-input -->
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
   
   
$(document).ready(function(){
    var page = 0;
    var isLoading = false;
    
    $('#chat').on('scroll', function() {
        var scrollTop = $(this).scrollTop();

        // إذا كان موضع التمرير في الأعلى
        if (scrollTop === 0 && !isLoading) {
            isLoading = true;

    var csrfToken   = "{{ csrf_token() }}";
    // $('#chat').height();  
    page++;
var user_Id=  {{$user_id->id}};
        $.ajax({
    url:"/messanger/"+user_Id,
    type:"GET",
    data:{
        page: page,
        userId: user_Id,
        _token: csrfToken,
            },
    success: function(response) {
        var $response = $(response).find('#chat').html(); // تحويل الاستجابة إلى عناصر jQuery  
       // $('#messageContainer').prepend($response)

                $('#chat').prepend($response);
               isLoading = false;
            
    },
    error: function(xhr, status, error) {
                console.log("حدث خطأ أثناء معالجة الطلب");
                isLoading = false;
            }
            
});
 
} 

});
 
  
    
$('#sendbo input[type="submit"]').on('click', function(){
    
    var $textArea = $('#sendbo').find('textarea');
    var $meInput = $('#sendbo').find('input[name="me"]');
    var $youInput = $('#sendbo').find('input[name="you"]');
    var $submitButton = $('#sendbo').find('input[type="submit"]');
    var userid={{$user_id->id}};
    var text    =   $textArea.val();
    var me      =   $meInput.val();
    var you     =   $youInput.val();
    var csrfToken = "{{ csrf_token() }}";

    var formdata= new FormData();
    formdata.append('text', text);
    formdata.append('me',me);
    formdata.append('you',you);
    formdata.append('_token',csrfToken);

   
$.ajax({
    url:"/messanger/"+userid+"/",
    type:"POST",
    data: formdata,
    processData: false,
     contentType: false,
    success: function(response) {
        return console.log(response);
        
    },
    error: function(xhr, status, error) {
                console.log("حدث خطأ أثناء معالجة الطلب");
            }
});

  


});

   
var csrfToken = "{{ csrf_token() }}";
   
setInterval(() => {

      
        $.ajax({
            url:'/messanger/'+{{$user_id->id}},
            type:'GET',
            data:{
                userId: {{$user_id->id}},
                _token: csrfToken,
            },
            success: function(response) {
                // تحديث الصفحة بالرد HTML
                var aa      =   $('#chat #chat1').last().html();
                var $response = $(response).find('#chat').html(); // تحويل الاستجابة إلى عناصر jQuery  
                var bb  =   $(response).find('#chat #chat1').last().html();
                var cc  =   $('#chat #chat1').first().html();
                var dd  =   $(response).find('#chat #chat1').eq(1).html();
                var ee  =   $('#chat #chat1').eq(1).html()
                    if(aa===bb && ee ===dd){
                        console.log("بلح");
                        console.clear();
                        // need time to make it very good
                        return false;
                    }else{
                    //console.log(cc);
                    $('#chat').html($response);
                    }
                //console.clear();
            },
            error: function(xhr, status, error) {
                console.log("حدث خطأ أثناء معالجة الطلب");
            }
        })
        
    }, 1000);
   
});

</script>