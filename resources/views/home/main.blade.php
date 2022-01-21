<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--#######  css slick #######-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
</head>

<body class="bg-bwhite lg:mx-12 md:mx-10 sm:mx-8 mx-6 lg:my-6 md:my-5 sm:my-4 my-3">

    @yield('container')

    <!-- ----------------------------------JS SLIDER---------------------------------------------------- -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>


    <script>
        $('.slick_one').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            speed: 3000,
            autoplaySpeed: 3000,
            infinite: true,
        });
    </script>
</body>

</html>
