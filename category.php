<?php
    include "path.php";
    include "app/controllers/topics.php";
    $posts = selectAll('posts', ['id_topic' => $_GET['id']]);
    $topTopic = selectTopTopicFromPostsOnIndex('posts');
    $category = selectOne('topics', ['id' => $_GET['id']]);
function getStringMonth($month)
{
    $stringMonth = [
        "01" => "Января",
        "02" => "Февраля",
        "03" => "Марта",
        "04" => "Апреля",
        "05" => "Мая",
        "06" => "Июня",
        "07" => "Июля",
        "08" => "Августа",
        "09" => "Сентрября",
        "10" => "Октября",
        "11" => "Ноября",
        "12" => "Января"
    ];
    return $stringMonth[$month];
}
function getStringDate($date)
{

    $date = explode("-", explode(" ", $date)[0]);
    $year = $date[0];
    $month = getStringMonth($date[1]);
    $day = $date[2];
    return $day." ".$month." ".$year;
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include "./app/include/links.php"?>


        <!-- Favicon -->
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
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <h2>Статьи с раздела <strong><?=$category['name']; ?></strong></h2>
                    <?php foreach ($posts as $post): ?>
                        <!-- Single Blog Area  -->
                        <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="single-blog-thumbnail">
                                        <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="">
                                        <div class="post-date">
                                            <a href="#"><?=getStringDate($post['created_date']);?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Blog Content -->
                                    <div class="single-blog-content">
                                        <div class="line"></div>
                                        <a href="<?=BASE_URL . 'single-post.php?post=' . $post['id'];?>" class="post-tag">Елена Тимофеева</a>
                                        <h4><a href="<?=BASE_URL . 'single-post.php?post=' . $post['id'];?>" class="post-headline"><?=substr($post['title'], 0, 55)?></a></h4>
                                        <p> <?=mb_substr($post['content'], 0, 30, 'UTF-8') ?></p>
                                        <a href="<?=BASE_URL . 'single-post.php?post=' . $post['id'];?>" class="btn original-btn">Читать далее</a>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    <?php endforeach; ?>

                </div>


                <div class="col-12 col-md-4 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <form method="post" action="search.php" class="search-form">
                                <input type="search" name="search-term" id="searchForm" placeholder="Search">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Категории</h5>
                            <div class="widget-content">
                                <ul class="tags">
                                    <?php foreach ($topics as $key => $topic): ?>
                                        <li>
                                            <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
