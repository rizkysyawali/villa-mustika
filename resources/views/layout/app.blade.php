<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Villa Ciwidey Bandung" content="Villa Ciwidey Bandung">
        <meta name="Villa Mustika Ciwidey" content="Villa Mustika Ciwidey">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/fontawesome-all.min.css" rel="stylesheet">
        <link href="./css/aos.min.css" rel="stylesheet">
        <link href="./css/swiper.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
        @stack('styles')
        <!-- Favicon -->
        <link rel="icon" href="./assets/images/logo.png">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js"></script>

    </head>
    <body class="antialiased">     

        @yield('content')
 
    <!-- Scripts -->
    <!-- Bootstrap framework -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="./js/purecounter.min.js"></script>
    <!-- Swiper for image and text sliders --> 
    <script src="./js/swiper.min.js"></script>
    <!-- AOS on Animation Scroll -->
    <script src="./js/aos.js"></script>
    <!-- Custom scripts -->
    <script src="./js/script.js"></script>
    
    <script>
        var options = {
            strings: [ "Villa ", "Resort" ],
            typeSpeed: 100,
            backSpeed: 60,
            loop:true
           
            };
        var typing = new Typed(".typed", options);
    
    </script>
     @stack('script')
    </body>
</html>
