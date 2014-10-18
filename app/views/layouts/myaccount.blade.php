<!DOCTYPE html>
<html>
  <head>
@include('includes.head')
  </head>
  <body id="top" class="thebg" >
    @include('includes.header')
	@yield('content')
	@include('includes.footer')
  </body>
</html>
