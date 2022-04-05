@php
// Bebeb Net - Network
/*
created by :
nama : Puji Ermanto
email : pujiermanto@gmail.com
no telp : 0882 2266 8778
github username : codesyariah122
*/
@endphp
<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}" />
        <title> {{env('APP_NAME')}} </title>
        <meta name="author" content="{{env('APP_NAME')}}">
        <meta name="description" content="ISP Kabupaten BANDUNG">
        <meta name="keywords" itemprop="keywords" content="{{env('APP_NAME')}}, ISP Kabupaten BANDUNG">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{env('APP_NAME')}}">
        <meta property="og:url" content="{{env('APP_URL')}}">
        <meta property="og:site_name" content="{{env('APP_NAME')}}">
        <meta property="og:description" content="ISP Kabupaten BANDUNG">
        {{-- Custome Meta Tag --}}
        <link rel="canonical" href="{{$canonical}}" />
        <meta name="description" content="{{$meta_desc}}">
        <meta name="keywords" content="{{$meta_key}}">
        <meta name="author" content="{{$meta_author}}">
        <meta property="og:url" content="{{$og_url}}">
        <meta property="og:type" content="{{$og_type}}" />
        <meta property="og:site_name" content="{{$og_site_name}}" />
        <meta property="og:title" content="{{$og_title}}">
        <meta property="og:description" content="{{$og_desc}}">
        <meta property="og:image" content="{{$og_image}}">
        <meta property="og:image:width" content="{{$og_image_width}}" />
        <meta property="og:image:height" content="{{$og_image_height}}" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{env('APP_NAME')}}">
        <meta name="twitter:description" content="ISP Kabupaten BANDUNG">
        <meta name="twitter:image" content="https://raw.githubusercontent.com/codesyariah122/bebeb-net/main/public/images/Screenshot%20from%202022-04-02%2021-03-40.png">
        <meta content='Global' name='Distribution'>
        <meta content='General' name='Rating'>
        <meta content='INDEX FOLLOW' name='Robots'>
        <meta content='ID' name='language'>
        <meta content='ID' name='geo.country'>
        <meta content='Indonesia' name='geo.placename'>
        <meta content='global' name='target'>
        <meta content='index,follow,snipet' name='googlebot'>
        <meta content='follow, all' name='Googlebot-Image'>
        <meta content='follow, all' name='Scooter'>
        <meta content='follow, all' name='msnbot'>
        <meta content='follow, all' name='alexabot'>
        <meta content='follow, all' name='Slurp'>
        <meta content='follow, all' name='ZyBorg'>
        <meta content='follow, all' name='Scooter'>
        <meta content='ALL' name='SPIDERS'>
        <meta content='ALL' name='WEBCRAWLERS'>
        <link rel="icon" type="image/png" href="{{asset('images/favicon-32x32.png')}}">

        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    </head>

    <body id="top">
        <div id="app">
            <app/>
        </div>
        {{-- Page Content --}}
        {{-- @yield('content') --}}
        {{-- End Page Content --}}


    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-624867b67d8490ed"></script> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143329770-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143329770-2');
    </script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <script type="text/javascript" src="{{asset('js/widget.js')}}"></script>
    <script src="{{asset('js/landing.js')}}"></script>
 </body>

 </html>