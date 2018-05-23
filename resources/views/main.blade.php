<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    
    <link rel="stylesheet"  href="{{ asset('/css/app.css') }}">
  
     <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
     <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous"> -->

    <title>Family Site @yield('title')</title>
   
   
  
  </head>
  <body>
   

 
   
        @yield('content') 

    
       
       
    
     <script  src ="{{ asset('/js/app.js') }}""></script>
     @yield('script')
    
  </body>
</html> 