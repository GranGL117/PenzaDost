<?php require_once "header.php";
require_once 'vendor/connect.php';
?>

    <div class="container">
        <div class="intro">
            <h1 class="intro_title">Пензенская область</h1>
            <p class="intro_text">Путеводитель по региону, города Пензенской области со списками главных достопримечательностей. Места, которые стоит посетить в первую очередь — всё самое популярное и интересное.</p>
        </div>
    </div>

    <div class="slider_container">
        <div class="slider">
            <?php
            $info = mysqli_query($connect, "SELECT `id`, `title`, `face_pic` FROM `dost_info`");
            $info = $info->fetch_all();
            foreach ($info as $dost) { ?>
            <div>
                <img src="data:image/jpeg;base64, <?=base64_encode($dost[2]) ?>">
                <a class="slider_link" href="Dost/content.php?id=<?=$dost[0] ?>"><?=$dost[1] ?></a>
            </div>
            <?php } ?>
        </div>
    </div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>