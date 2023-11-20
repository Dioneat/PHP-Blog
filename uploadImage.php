<?php
include "path.php";

header('Access-Control-Allow-Origin: *');

$base_host_img = BASE_URL."/assets/images/editor-img/";

$imgName = time() . "_" . $_FILES['upload']['name'];
$fileTmpName = $_FILES['upload']['tmp_name'];
$fileType = $_FILES['upload']['type'];
$destination = ROOT_PATH . "/assets/images/editor-img/" . $imgName;



if ( move_uploaded_file($fileTmpName,$destination) )
{


    $dati = array();
    $dati['url'] = $base_host_img .  $imgName = time() . "_" . $_FILES['upload']['name'];;
    echo json_encode($dati);
}

?>