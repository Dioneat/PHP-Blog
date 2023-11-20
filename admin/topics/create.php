<?php
    include "../../path.php";
    include "../../app/controllers/topics.php";
?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<?php include("../../app/include/header.php"); ?>


<div class="blog-wrapper section-padding-100 clearfix">
    <div class="container">
        <div class="posts col-9">
            <div class="row title-table">
                <h2>Создать категорию</h2>
            </div>
            <div class="row add-post">

                <form action="create.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?=$id; ?>">
                    <div class="col mb-4">
                        <input value="<?=$name;?>" name="name" type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержимое категории</label>
                        <textarea name="description" class="form-control" rows="3"><?=$description;?></textarea>
                    </div>
                    <div class="col col-6">
                        <button name="topic-create" class="btn btn-primary" type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include("../../app/include/footer.php"); ?>
    <!-- // footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="../../assets/lib/build/ckeditor.js"></script>

    <script src="../../assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../../assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../../assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="../../assets/js/active.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
