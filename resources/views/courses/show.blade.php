<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

@component('components.navigation')
@endcomponent

{{--<header class="course-overview" style="">--}}
<header class="course-overview" style="background: url(' {{ asset("images/html-placeholder.jpg") }} ')">
<span class="text-white">HTML & CSS</span>
</header>
<div class="container course">
    <!--        <div class="bread-crumb"><a href="index.html">home</a> / <a href="overview.php">HTML & CSS</a> / <a href="#">Introductie</a>-->
    <!--        </div>-->
    <div class="bread-crumb">
        <?php //get_breadcrumb(); ?><!---->
    </div>
    <div class="course">
        <h1> {{ $course->title }}</h1>
        {{ $course->content }}
    </div>

</div>
</body>
</html>
