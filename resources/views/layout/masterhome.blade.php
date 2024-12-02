<!DOCTYPE html>
<html lang="en">

@include('layout.header')
<body>
<div id="app" class="app app-header-fixed app-sidebar-fixed  app-with-wide-sidebar">

@include('layout.navbar')

@yield('content')

 <!-- Footer-->
 @include('layout.footer')
</div>

    </body>
</html>