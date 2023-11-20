<?php
    include "../../path.php";
    include "../../app/controllers/topics.php";
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
            <div class="col-12">
                <h2>Категории</h2>
                <?php foreach ($topics as $topic): ?>
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <div class="line"></div>
                                    <a class="post-tag">ID: <?=$topic['id']; ?></a>
                                    <h4><?=$topic['name']; ?></h4>
                                    <p> <?=$topic['description']  ?></p>
                                    <a href="edit.php?id=<?=$topic['id'];?>" class="btn original-btn">Изменить</a>
                                    <a href="edit.php?del_id=<?=$topic['id'];?>" class="btn original-btn">Удалить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="<?php echo BASE_URL . "admin/topics/create.php";?>" class="col-2 btn original-btn">Создать</a>

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


