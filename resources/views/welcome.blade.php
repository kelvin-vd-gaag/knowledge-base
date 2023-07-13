<!DOCTYPE html>
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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<div class="navigation" id="navigation">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Vakken</a></li>
            <li><a href="#">F.A.Q</a>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>
</div>


<header class="top-header">
    <div class="account-management">
        <i class="fas fa-user"></i>
        <i class="fas fa-bell"></i>
    </div>
    <div class="hamburger-menu" id="hamburger-menu"><i class="fas fa-bars"></i></div>

</header>

<!--Aria hidden true zetten als het menu de focus heeft voor accessibility redenen-->
<div class="container">
    <div class="greeting">
        <div class="user-greet">
            @auth()
                <span class="highlight-text">Hey,</span>
                <span class="user-name">John Doe</span>
            @endauth
            @guest()
                <span class="user-name">Overweeg een account aan te maken</span>
            @endguest
        </div>
        <!--        <div class="personalised-greeting">Welkom terug!</div>-->
    </div>
    <div class="search">
        <form action="">
            <input type="search" id="search" name="search" placeholder="Zoek een vak..." autocomplete="off">
            <i class="fas fa-search"></i>
        </form>
    </div>
    <div class="overview">
        <header>
            <h1><span class="text-underline">Kies</span> je vak</h1>
            <a href="{{ url('/courses') }}">Meer vakken</a>
        </header>
        <div class="items">
                        <?php
                        foreach ($courses as $course) {
                            echo "<a href='" . $course->id . "'><div class='item overlay'>
                                    <div class='background-image' style='background: url(assets/cartoon-four.png)'>
                                        <h2 class=''>Periode 1</h2>
                                        <h3 class='courses-title'>" . $course->title ."</h3>
                                    </div>
                                </div></a>";
                        }
                        ?>
        </div>
    </div>
</div>

</body>
</html>
