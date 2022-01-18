<?php require_once "header.php" ?>

<div class="intro">
    <div class="container">
        <h1>Пензенская область</h1>
        <p class="intro_text">Путеводитель по региону, города Пензенской области со списками главных достопримечательностей. Места, которые стоит посетить в первую очередь — всё самое популярное и интересное.</p>
    </div>

    <div class="slider">
        <ul>
            <li><img src="img/1.jpg" alt=""></li>
            <li><img src="img/2.jpg" alt=""></li>
            <li><img src="img/3.jpg" alt=""></li>
        </ul>
    </div>

</div>

</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".slider").each(function () { // обрабатываем каждый слайдер
            var obj = $(this);
            $(obj).append("<div class='nav'></div>");
            $(obj).find("li").each(function () {
                $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // добавляем блок навигации
                $(this).addClass("slider"+$(this).index());
            });
            $(obj).find("span").first().addClass("on"); // делаем активным первый элемент меню
        });
    });
    function sliderJS (obj, sl) { // slider function
        var ul = $(sl).find("ul"); // находим блок
        var bl = $(sl).find("li.slider"+obj); // находим любой из элементов блока
        var step = $(bl).width(); // ширина объекта
        $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 это скорость перемотки
    }
    $(document).on("click", ".slider .nav span", function() { // slider click navigate
        var sl = $(this).closest(".slider"); // находим, в каком блоке был клик
        $(sl).find("span").removeClass("on"); // убираем активный элемент
        $(this).addClass("on"); // делаем активным текущий
        var obj = $(this).attr("rel"); // узнаем его номер
        sliderJS(obj, sl); // слайдим
        return false;
    });
</script>
</html>