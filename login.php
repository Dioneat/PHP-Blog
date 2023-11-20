<?php   include("path.php");
include "app/controllers/users.php";
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
                <div class="post-a-comment-area mt-70">
                    <h5>Авторизация</h5>
                    <!-- Reply Form -->
                    <form action="login.php" method="post">
                        <div class="row">

                            <div class="col-12">
                                <div class="group">
                                    <input type="email" name="mail" value="<?=$email?>" id="email" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="group">
                                    <input type="password" name="password" id="subject" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Пароль</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="button-log" class="btn original-btn">Войти</button>
                            </div>
                        </div>
                    </form>
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