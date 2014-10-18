<!DOCTYPE html>
<html lang='en'>
    <head>
        @include('includes.admin.head')
        <style>
            body {
                margin-top: 5%;
            }
        </style>
    </head>
   <body id="top">
        @include('includes.admin.header')
                @yield('content')
        @include('includes.admin.footer')
    </body>
</html>