<footer class="footer">
    <div class="modal fade dropzoneDiv" id="modal-dialog2">
        <div class="modal-dialog" >
            <div class="modal-content" style="width: 600px;">
                <div class="modal-header">
                    <h3 class="modal-title">Create Posts </h3>
                    
                        <a href="#modal-dialog" class="bg-gray rounded-circle  btn"  data-bs-toggle="modal"><-  </a>
                    
                </div>
                <div class="modal-body " >
                    <div class="row">
                        <div class="col-2 meny-pro-pic">
                            <img src="{{asset('style/Screenshot 2023-03-09 180627.png')}}"/>
                        </div>
                        <div class="col-10 overflow-auto">
                            <div class="row m-1">
                                <div class="col-3">
                                    <span><h5>khaled jemy</h5></span>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default">Dropdown</a>
                                        <a href="#" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                        ...
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <textarea class="wysihtml5" placeholder="Enter text ..."></textarea>
                                    <input type="hidden" name="example[]" id="fileInput" />
                                </div>
                            </div>
                            <div id="myDropzone" class="position-relative">
                                <div class="dropzoneDiv w-100 h-100 bg-gray " id="previewDiv">
                                    Drop files here or click to upload
                                </div>
                                <button id="sendButton">Send</button>
                            </div>
                        </div>
                        <div class="row rounded border p-3 mx-1">
                            <div class="col-md-4">add to your post</div>
                            <div class="col-md-8" >
                                <ul class="nav nav-pills">
                                    <li class="nav-item mx-2 rounded-circle">
                                        <a href="#modal-dialog" data-bs-toggle="modal" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/Ivw7nhRtXyo.png')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#modal-dialog2" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/b37mHA1PjfK.png')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#default-tab-1" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/Y4mYLVOhTwq.png')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#default-tab-1" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/8zlaieBcZ72.png')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#default-tab-1" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/h_kj6ECZ7Ii.png')}}"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row-mx-2  modal-footer px-4">
                        <button type="submit" href="javascript:;" id="post" class="col-12 btn btn-primary ">POST</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade dropzoneDiv" id="modal-dialog">
        <div class="modal-dialog" >
            <div class="modal-content" style="width: 600px;">
                <div class="modal-header">
                    <h3 class="modal-title">Create Posts </h3>
                    <button type="button" class="btn-close bg-gray rounded-circle p-3" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-2 meny-pro-pic">
                            <img src="{{asset('style/Screenshot 2023-03-09 180627.png')}}"/>
                        </div>
                    <div class="col-10 ">
                        <div class="row m-1">
                            <div class="col-3">
                                <span><h5>khaled jemy</h5></span>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default">Dropdown</a>
                                    <a href="#" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                    <li>public</li>
                                    <li>freinds</li>
                                    <li>only me</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-9">
                                <textarea class="wysihtml5" id='wysihtml5' placeholder="Enter text ..."></textarea>
                            </div>                 
                        </div>
                    </div>
                    <div class="row rounded border p-3 mx-1">
                        <div class="col-md-4">add to your post</div>
                        <div class="col-md-8" >
                            <ul class="nav nav-pills">
                                <li class="nav-item mx-2 rounded-circle">
                                    <a href="#modal-dialog2" data-bs-toggle="modal" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/Ivw7nhRtXyo.png')}}"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#modal-dialog2" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/b37mHA1PjfK.png')}}"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#default-tab-1" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/Y4mYLVOhTwq.png')}}"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#default-tab-1" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/8zlaieBcZ72.png')}}"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#default-tab-1" data-bs-toggle="tab" class=" "><img class="rounded img-fluid w-25px h-25px"  src="{{asset('style/h_kj6ECZ7Ii.png')}}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="row-mx-2  modal-footer px-4">
                        <button type="submit"  href="javascript:;" class="col-12 btn btn-primary ">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
        <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
            <li>English (UK)</li>
            <li><a class="_sv4" dir="rtl" href="#"  title="Arabic">العربية</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="French (France)">Français (France)</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="Italian">Italiano</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="German">Deutsch</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="Russian">Русский</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="Spanish">Español</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="Indonesian">Bahasa Indonesia</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="Turkish">Türkçe</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="Portuguese (Brazil)">Português (Brasil)</a></li>
            <li><a class="_sv4" dir="ltr" href="#" onclick=" " title="Hindi">हिन्दी</a></li>
            <li><a role="button" class="_42ft" rel="dialog"  href="#" title="Show more languages"><i class="img sp_WVURdRny0I1 sx_69a368"></i></a></li>
        </ul>
       
        </div>
        <div class="mvl copyright">
            <div>
                <span> Meta © 2023</span>
            </div>
        </div>
    </div>
    
    </footer>
   @include('layout.js')