<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ระบบตรวจสอบและติดตามสภาพแวดล้อมการปลูกพืช</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="https://fonts.googleapis.com/css?family=Taviraj|Trirong" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css"> -->
    <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/> -->

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" media="all"/> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asste/css/sweetalert.css') }}">
    <!-- Global CSS -->
    
    <style>
        html,body{
            font-family: 'Taviraj', serif;
        }
        .navbar-default .navbar-collapse, .navbar-default .navbar-form {
            padding: 10px;
        }
        .w3-menu {
        color: #000!important;
        position: relative;
        background-color: #ffffff;
        }
        /*AddOrder*/
        .w3-white {
        color: #000!important;
        position: relative;
        background-color: #ffffff;
        /*background-image: url('../img/bg02.jpg');*/
        background-size: contain;
        }
        .w3-card-2 {
            box-shadow: 0px 0px 2px 4px rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
        }
        .w3-round {
            border-radius: 4px!important;
        }
        .w3-container {
            padding: 0.01em 16px;
            margin: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            /* height: 400px; */
        }

        .navbar-default {
                background-color: #00CC66;
                border-color: #25c146;
         }
         .navbar-default .navbar-brand {
                color: #fff;
        }
        .navbar-brand>img {
            width: 40px;
            display: inline;
        }       
    </style>
    
    @yield('head')
  </head>

  <body id="body">
    @include('layouts.header')  
     
        
    <!-- Global Body -->
    @yield('body')

    @include('layouts.footer')  

    
      <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="{{ asset('asste/js/sweetalert.min.js') }}"></script>

    <!-- Global JavaScript -->
    @yield('script')
    

    @include('layouts.toastr')


  </body>
</html>
