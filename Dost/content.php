<?php require_once '../vendor/connect.php';
    $id =$_GET['id'];
    $info = mysqli_query($connect, "SELECT `dost_pic`.*, `dost_info`.*
                                          FROM `dost_info`
                                          LEFT JOIN `dost_pic` ON `dost_info`.`id` = `dost_pic`.`id` WHERE dost_info.id='$id'");
    $info = $info->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css?=version5">
    <link rel="stylesheet" type="text/css" href="../style/slick.css"/>
    <title><?=$info['title'] ?></title>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="header_logo">
                <img id="logo" src="../img/logo.png">
            </div>
            <h1 class="header_title">Достопримечательности Пензы</h1>
            <nav class="nav_">
                <a class="nav_link" href="../index.php">Главная</a>
                <a class="nav_link" href="../map.php">Карта</a>
                <a class="nav_link" href="../about.php">О сайте</a>
            </nav>
        </div>
    </div>
</header>

<div class="content_container">
    <div class="content_inner">
        <h1 class="content_title"><?=$info['title'] ?></h1>
        <p class="content_text"><?=$info['description'] ?></p>
        <div class="content_info">
            <p class="content_text"><span class="content_text_title">Дата основания</span>(гг-дд-мм)<span class="content_text_title">:</span> <?=$info['founding_date']?></p>
            <p class="content_text"><span class="content_text_title">Адрес:</span> <?=$info['address']?></p>
            <p class="content_text"><span class="content_text_title">Телефон:</span> <?=$info['number']?></p>
            <p class="content_text"><span class="content_text_title">Сайт:</span> <?=$info['site']?></p>
            <p class="content_text"><span class="content_text_title">Часы работы:</span><?=$info['opening_hours']?></p>
        </div>
    </div>
    <div class="content_slider">
        <div class="slider">
            <?php
            $pics = mysqli_query($connect, "SELECT * FROM `dost_pic` WHERE id='$id'");
            $pics = $pics->fetch_all();
            foreach ($pics as $pic) { ?>
            <div>
                <img src="data:image/jpeg;base64, <?=base64_encode($pic[1]) ?>">
            </div>
            <?php } ?>
        </div>
    </div>
</div>



<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/infoSlider.js"></script>
</body>
</html>
