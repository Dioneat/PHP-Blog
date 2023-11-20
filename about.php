<?php
include "path.php";
include "app/controllers/topics.php";
$topTopic = selectTopTopicFromPostsOnIndex('posts');
$sections = selectAll('about_section');





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./app/include/links.php"?>

    <link rel="icon" href="assets/images/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="original-load"></div>
    </div>
</div>



<!-- ##### Header Area Start ##### -->
<?php include "./app/include/header.php" ?>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">

        <?php foreach ($topTopic as $key => $post): ?>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">

                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 120)?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Single Slide -->

    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100 clearfix">
    <?php foreach($sections as $key => $section): ?>
    <div class="container">
        <div class="row align-items-end">
            <!-- Single Blog Area -->
            <div class="col-12">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <?=$section['content']?>
                    </div>
                </div>
            </div>
        </div>
        <?php if($_SESSION['admin']):?>
        <a href="<?php echo BASE_URL . "admin/about/edit.php?id=".$section['id'];?>" class="col-2 btn original-btn">Изменить</a>
        <a href="<?php echo BASE_URL . "admin/about/edit.php?delSec_id=".$section['id'];?>" class="col-2 btn original-btn">Удалить</a>
        <?endif;?>
    </div>
    <?php endforeach?>
    <?php if($_SESSION['admin']):?>
    <div class="container">
        <a href="<?php echo BASE_URL . "admin/about/create.php";?>" class="btn original-btn">Создать</a>

    </div>
    <?endif;?>


</div>
<!-- ##### Blog Wrapper End ##### -->



<!-- ##### Footer Area Start ##### -->
<?php include "./app/include/footer.php" ?>
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- Active js -->
<script src="assets/js/active.js"></script>

</body>

</html>