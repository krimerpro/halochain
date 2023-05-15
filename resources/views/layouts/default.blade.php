<!doctype html>
<html lang="en-US">
  <head>
     @include('includes.head')
  </head>

  <body id="dark-mode" style="background-color:black">
     @include('includes.header')

     @yield('content')

     @include('includes.footer')
  </body>
</html>
