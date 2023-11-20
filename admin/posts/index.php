<?php
include "../../path.php";
include "../../app/controllers/posts.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Блог Тимофеевой Елены Григорьевны</title>

    <!-- Favicon -->
    <link rel="icon" href="../../assets/images/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="original-load"></div>
    </div>
</div>



<!-- ##### Header Area Start ##### -->
<?php include "../../app/include/header.php" ?>
<!-- ##### Header Area End ##### -->


<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
            <h2>Статьи</h2>
                <?php foreach ($postsAdm as $post): ?>
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="single-blog-thumbnail">
                                    <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="">
                                    <div class="post-date">
                                        <a href="#"><?=$post['created_date'];?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <div class="line"></div>
                                    <a class="post-tag">ID: <?=$post['id']; ?></a>
                                    <a href="<?=BASE_URL . 'single-post.php?post=' . $post['id'];?>" class="post-tag">Елена Тимофеева</a>
                                    <h4><a href="<?=BASE_URL . 'single-post.php?post=' . $post['id'];?>" class="post-headline"><?=substr($post['title'], 0, 55) ?></a></h4>
                                    <p> "<?=mb_substr($post['content'], 0, 30, 'UTF-8')  ?>"</p>
                                    <a href="<?=BASE_URL . 'single-post.php?post=' . $post['id'];?>" class="btn original-btn">Читать далее</a>
                                    <a href="edit.php?id=<?=$post['id'];?>" class="btn original-btn">Изменить</a>
                                    <a href="edit.php?delete_id=<?=$post['id'];?>" class="btn original-btn">Удалить</a>
                                    <?php if ($post['status']): ?>
                                       <a href="edit.php?publish=0&pub_id=<?=$post['id'];?>" class="btn original-btn">В архив</a>
                                    <?php else: ?>
                                        <a href="edit.php?publish=1&pub_id=<?=$post['id'];?>" class="btn original-btn">Разархивировать</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php include("app/include/pagination.php"); ?>
                <a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-2 btn original-btn">Создать</a>
            </div>

            <!-- ##### Sidebar Area ##### -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="post-sidebar-area">

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <form action="#" class="search-form">
                            <input type="search" name="search" id="searchForm" placeholder="Search">
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
<script src="../../assets/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="../../assets/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="../../assets/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="../../assets/js/plugins.js"></script>
<!-- Active js -->
<script src="../../assets/js/active.js"></script>

</body>

</html>