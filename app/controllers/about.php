<?php
include SITE_ROOT . "/app/database/db.php";
if (!$_SESSION){
    header('location: ' . BASE_URL . 'login.php');
}

$id = '';
$content = '';
$sections = selectAll('topics');


// Код для формы создания записи
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_section']))
{
    $content = trim($_POST['content']);
    if($content === ''){
        array_push($errMsg, "Не все поля заполнены!");
    }
    else{
        $section = [
            'content' => $content,
        ];

        $section = insert('about_section', $section);
        $section = selectOne('about_section', ['id' => $id] );
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    }
}else{
    $id = '';
    $content = '';
}


// АПДЕЙТ СТАТЬИ
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $section = selectOne('about_section', ['id' => $_GET['id']]);

    $id =  $section['id'];
    $content = $section['content'];

}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_section'])){
    $id =  $_POST['id'];
    $content = trim($_POST['content']);

    if($content === ''){
        array_push($errMsg, "Не все поля заполнены!");
    }
    else{
        $section = [
                'content' => $content,
            ];
        $section = update('about_section', $id, $section);
        header('location: ' . BASE_URL . 'about.php');
    }
}
else{
    $content = $_POST['content'];
}

// Удаление статьи
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delSec_id'])){
    $id = $_GET['delSec_id'];
    delete('about_section', $id);
    header('location: ' . BASE_URL . 'about.php');
}