<div id="sidebar" class="app-sidebar sidebar w-350px">
    <div class="app-sidebar-content ps ps--active-y" data-scrollbar="true" data-height="100%">
        <div class="left_sidebar row">
            @if(Auth::check()) 
     
            <ul>
                <li><a href="profile/{{Auth::user()->id}}" class="meny-pro-pic" >
                        
                     @if(isset($profile) && isset($profile['photopro']))

                    <img src=" {{ asset($profile['photopro']->path.$profile['profile_photo_id'].$profile['photopro']->type) }}  " alt=""/>
                    @endif

                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} 
                    </a>
                </li>
                <li><a href="/" id="index.html" class="home_icon"><img src="style/YHLvfJvVfG6.png" />home</a></li>
            </ul>
            @endif
            <hr>
            <ul>
                <li><a href="#" class="watch"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"/>Watch</a></li>
                <li><a href="#" class="gaming"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"/>Gaming</a></li>
                <li><a href="#" class="see_all">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"/>see all</a></li>
            </ul>
            <hr>
        </div>
    </div>
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop">
    <a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
