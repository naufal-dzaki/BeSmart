<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--#######  css slick #######-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
</head>

<body class="bg-bwhite lg:mx-12 md:mx-10 sm:mx-8 mx-6 lg:my-6 md:my-5 sm:my-4 my-3">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="w-10/12">
                <h1 class="mb-3">Ini Adalah Judul</h1>

                <p>By. <a href="/posts?author={{ $posts->author->username }}">Ini gruu</a> in <a href="/posts?category={{ $posts->category->slug }}"></a></p>
            
                <article class="my-3 fs-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nulla magnam saepe deleniti, optio modi! Facere, nulla aliquid, ut officia voluptas eaque iure dignissimos aut aspernatur totam cupiditate qui voluptate omnis maxime pariatur odio repudiandae voluptates laborum? Eos nesciunt ratione, nobis error, iste repudiandae autem dolor, necessitatibus soluta esse beatae!
                </article>
            
                <a href="/posts">back to posts</a>
            </div>
        </div>
    </div>
</body>

</html>
