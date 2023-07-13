<header class="top-header">
    <div class="account-management">
        <i class="fas fa-user"></i>
        <i class="fas fa-bell"></i>
    </div>
    <div class="hamburger-menu" id="hamburger-menu"><i class="fas fa-bars"></i></div>

</header>

<header class="course-overview" style="background: url('<?php echo get_the_post_thumbnail_url(); ?> ')">
    <span class="text-white">HTML & CSS</span>
</header>
<div class="container course">
    <!--        <div class="bread-crumb"><a href="index.html">home</a> / <a href="overview.php">HTML & CSS</a> / <a href="#">Introductie</a>-->
    <!--        </div>-->
    <div class="bread-crumb">
        <?php get_breadcrumb(); ?>
    </div>
    <div class="course">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

</div>
