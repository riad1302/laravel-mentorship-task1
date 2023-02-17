<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Language" content="en">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title> Laravel Mentorship</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
      <meta name="description" content="This is an example dashboard created using build-in elements and components.">
      <meta name="msapplication-tap-highlight" content="no">
      <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
   </head>
   <body>
      <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
         @include('layouts.header')
         <div class="app-main">
            @include('layouts.navbar')
            <div class="app-main__outer">
                @yield('content')
                @include('layouts.footer')   
            </div>
         </div>
      </div>
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
      <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
   </body>
</html>