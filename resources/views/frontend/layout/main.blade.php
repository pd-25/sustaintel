<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Sustaintel </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @include('frontend.layout.partials.headdoc')

</head>

<body>

    
    @include('frontend.layout.partials.header')


   @yield('content')

    <a href="https://api.whatsapp.com/send?phone=8220026777&text=Hello..." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

  
    @include('frontend.layout.partials.footer')
    @include('frontend.layout.partials.footerscript')

    


</body>

</html>
