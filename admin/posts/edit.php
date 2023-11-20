<?php

include "../../path.php";
include "../../app/controllers/posts.php";
$date = getDateWithoutHours($post['created_date']);
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
                <h2>Редактирование записи</h2>
            </div>
            <div class="row add-post">

                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="col mb-4">
                        <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="">
                    </div>
                    <input type="hidden" name="id" value="<?=$id; ?>">
                    <div class="col mb-4">
                        <input type="date" name="date" value="<?=$date; ?>" min="01-01-1970" max="01.01.2030" />
                    </div>
                    <div class="col mb-4">
                        <input value="<?=$post['title']; ?>" name="title" type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержимое записи</label>
                        <textarea name="content" class="editor" id="editor" rows="6"><?=$post['content']; ?></textarea>
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input name="img" value="" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <select name="topic" class="form-select mb-2" aria-label="Default select example">

                        <?php foreach ($topics as $key => $topic): ?>
                            <?php if($topic['id'] == $post['id_topic']): ?>
                                <option value="<?=$topic['id']; ?>" selected><?=$topic['name'];?></option>
                            <?php else: ?>
                                <option value="<?=$topic['id']; ?>"><?=$topic['name'];?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>

                    <div class="form-check">
                        <?php if (empty($publish) && $publish == 0): ?>
                            <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Опубликовать
                            </label>
                        <?php else: ?>
                            <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                В архив
                            </label>
                        <?php endif; ?>
                    </div>
                    <div class="col col-6">
                        <button name="edit_post" class="btn btn-primary" type="submit">Сохранить запись</button>
                    </div>
                </form>
            </div>
        </div>
</div>

<!-- footer -->
<?php include("../../app/include/footer.php"); ?>
<!-- // footer -->


<!-- Optional JavaScript; choose one of the two! -->

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
