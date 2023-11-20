<?php include("path.php");
include "app/controllers/topics.php";
$post = selectPostFromPostsWithUsersOnSingle('posts', 'users', $_GET['post']);
$topic = selectTopicsPostsOnSigle('posts', 'topics', $_GET['post']);
$page = isset($_GET['page']) ? $_GET['page']: 1;
$limit = 3;
$offset = $limit * ($page - 1);
$recent_post = selectAllFromPostsWithUsersOnIndex('posts', 'users',  $_GET['post'], $limit, $offset);
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
        "10" => "Октябоя",
        "11" => "Ноябоя",
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
$date = getStringDate($post['created_date']);
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

<!--  ##### Single Blog Area Start ##### -->
<div class="single-blog-wrapper section-padding-0-100">

    <!-- Single Blog Area  -->
    <div class="single-blog-area blog-style-2 mb-50">
        <div class="single-blog-thumbnail">
            <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="">
            <div class="post-tag-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="post-date">
                                <a href="#"><?=$date ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- ##### Post Content Area ##### -->
            <div class="col-12 col-lg-9">
                <!-- Single Blog Area  -->
                <div class="single-blog-area blog-style-2 mb-50">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <a href="#" class="post-tag"><?php echo $topic['name'] ?></a>
                        <h4><a href="#" class="post-headline mb-0"><?php echo $post['title']; ?></a></h4>
                        <div class="post-meta mb-50">
                            <p>Елена Тимофеева</p>

                        </div>
                        <?=$post['content'];?>

                    </div>
                </div>




            </div>

            <!-- ##### Sidebar Area ##### -->
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