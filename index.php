<?php
include "path.php";
include "app/controllers/topics.php";

$page = isset($_GET['page']) ? $_GET['page']: 1;
$limit = 3;
$offset = $limit * ($page - 1);
$total_pages = round(countRow('posts') / $limit, 0);

$posts = selectAllFromPostsWithUsersOnIndex('posts', 'users', $limit, $offset);
$topTopic = selectTopTopicFromPostsOnIndex('posts');
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
    $day = ltrim($date[2],'0');
    return $day." ".$month." ".$year;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./app/include/links.php"?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.ico">

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


            <!-- Single Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(<?=BASE_URL . 'assets/images/hero-img1.jpeg' ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="slide-content text-center">

                            <h2 data-animation="fadeInUp" data-delay="250ms"><a>Добро пожаловать на мой личный блог!</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slide bg-img" style="background-image: url(<?=BASE_URL . 'assets/images/hero-img2.jpg' ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="slide-content text-center">

                            <h2 data-animation="fadeInUp" data-delay="250ms"><a>Здесь вы можете налюдать за моей работой и узнать о моих достижениях</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slide bg-img" style="background-image: url(<?=BASE_URL . 'assets/images/hero-img3.jpg' ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="slide-content text-center">

                            <h2 data-animation="fadeInUp" data-delay="250ms"><a>Хотите связаться со мной? Мои контактные данные находятся внизу</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide -->

    </div>
</div>
<!-- ##### Hero Area End ##### -->
<hr>
<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100 clearfix">
    <div class="container">
        <div class="row align-items-end">
            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>

                        <h4> <a href="#" class="post-tag">Обо мне</a></h4>
                        <p>
                            Родилась и выросла в чудесном городе Нижнем Новгороде. После школы поступила в Нижегородский Педагогический Колледж им. К.Д. Ушинского на отделение "Дошкольное образование". Успешно окончила его в 2005 году со специальностью "Воспитатель". В 2009 году закончила экономический факультет МФЮА и поняла, что работа моя может быть связана только с детьми. В 2019 году закончила ГОУ ВО МО "Государственный социально-гуманитарный университет" Педагогический факультет по профилю "Дошкольное образование".
                            <br>
                            Дополнительно прошла профессиональную переподготовку в ОАНО ВО "Московском психолого-социальном университете" по дополнительным профессиональным программам: "Логопедия" и "Специальное (дефектологическое) образование".
                        </p>
                        <a href="<?=BASE_URL."about.php"?>" class="btn original-btn">Читать дальше</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area -->
            <div class="col-12 col-md-6">
                <div class="single-catagory-area clearfix mb-100">
                    <img class="img-fluid" src="assets/images/back.jpg" alt="">
                </div>
            </div>
            <!-- Single Blog Area -->

        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">



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
                                <p> <?=mb_substr($post['content'], 0, 30, 'UTF-8'). '...'  ?></p>
                                <a href="<?=BASE_URL . 'single-post.php?post=' . $post['id'];?>" class="btn original-btn">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php include("app/include/pagination.php"); ?>
                <!-- Load More -->
                <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                    <a href="#" class="btn original-btn">Перейти в блог</a>
                </div>
            </div>

            <!-- ##### Sidebar Area ##### -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="post-sidebar-area">

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <form method="post" action="search.php" class="search-form">
                            <input type="search" name="search-term" id="searchForm" placeholder="Что-то ищете?">
                            <input type="submit" value="submit">
                        </form>
                    </div>



                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Категории</h5>
                        <hr>
                        <div class="widget-content">
                            <ul class="tags">
                                <?php foreach ($topics as $key => $topic): ?>
                                    <li>
                                        <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <hr>
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