<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--#######  css slick #######-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <style>

    </style>
</head>

<body class="bg-bwhite">
    <form method="" class="flex flex-col justify-center items-center w-full">
        @csrf
        <div class="flex mt-12">
            <img src="{{ asset('img/logo.png') }}" class="lg:w-24 md:w-20 w-14 h-full" alt="">
            <h1 class="font-bserif text-bblue lg:text-7xl md:text-6xl sm:text-5xl text-4xl font-bold">BeSmart</h1>
        </div>
        <p class="font-bsans text-bblack lg:text-xl md:text-lg sm:text-base text-sm text-center ">Rasakan pengalaman
            belajar <br> dimana saja dan kapan saja</p>

        <div class="w-auto mt-14">
            <p class="font-bsans text-gray-400 md:text-base sm:text-sm text-xs">Nama Lengkap</p>
            <div class="flex border-gray-300 rounded-lg border-2 w-auto ">
                <i class="ml-1 mx-0.5 sm:w-8 w-7"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAACiklEQVRYhe2WwUsUYRjGf++447oiIh3zWh1ao12bFcRLYNClWL14sat5NIIi+we0OnTqUNrNrmZIEJRhN8FZR9KBZMNDUGf3NLPu7rwdnAURxp1Z8FI+l/mY7/me55n3+76XgXP875CkC8rlcrpSqdwHJoGB8PWuqi51d3e/yWazh2cWYHt7u79er38ErkdRUqnUnVwu9zuuphGXWC6X08fMf6jqmO/7vb7v9wLjwB6Qq9frq67rdsbVTcUlViqV6aZ5R0fHcD6fPzg2veI4znqj0dgA8r7vTwGv4ujGrgBHe46qPjlhDkA+nz8Qkach515c0SQBrgJUq9WvUYRarfYlHGbPIkBLpFKpxLcqSQAXoKurazSKICKjAKq6exYB3oXPecdx+k5OOo7Tp6pzYZCluKKxSxY2oA0gB+yJyGytVlsDME3zVmh+BdjKZDLDcRtSO41oFchHULYMw7g7ODj4J65m4kPjum6n7/tTQRBMisg1AFXdEZGlTCazmLQVJ7oFtm2bnucVVXVERC5w9AESjkc8zyvatm0m0YxdgVKpNK6qz4FLLag/gUeWZa3E0W1ZAVU1SqXSM1VdDs2/AzOGYWRN0+wxTbMnCIIB4AGwE3Le27Y9p6ot9VtWIDR/DFRVdcayrAURCU4JOw28BNLAvGVZs20HCMu+DFSDILg9NDT0rVVggM3NzZsi8glIq+pYoVD4EMWNLJHrup3hnqOqM3HNAQqFwjrwEEBEXpx2MCMDeJ5XJNxzy7IW4po3sb+//xrYBS6rajFxAI5+MgAWo/b8NExMTDRE5C2AiIy1E+AGgGEYa0nNm2g0Gp/DodVOgIsA6XT6V7sBDg8Pm2v729U4xzn+ffwFliQPiBwKXHsAAAAASUVORK5CYII="></i>
                <input type="text" placeholder="ketik nama lengkap kamu"
                    class="font-bsans md:text-base sm:text-sm text-xs lg:w-96 md:w-80 sm:w-72 w-64 overflow-hidden text-center border-none bg-none outline-none">
            </div>
        </div>

        <div class="w-auto mt-6">
            <p class="font-bsans text-gray-400 md:text-base sm:text-sm text-xs">NISN</p>
            <div class="flex border-gray-300 rounded-lg border-2 w-auto ">
                <i class="ml-1 mx-0.5 sm:w-8 w-7"><img src="{{ asset('img/Lock.png') }}"></i>
                <input type="password" placeholder="ketik NISN kamu"
                    class="font-bsans md:text-base sm:text-sm text-xs lg:w-96 md:w-80 sm:w-72 w-64 overflow-hidden text-center border-none bg-none outline-none">
            </div>
        </div>
        <a href="/home"
            class="px-6 py-2 font-bdisplay bg-bblue sm:text-lg text-sm text-bwhite rounded-2xl font-bold mt-8">Masuk</a>
    </form>


</body>

</html>
