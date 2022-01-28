<?php require_once 'connect.php';?>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script type="text/javascript">
    var map;
    DG.then(function () {
        map = DG.map('map', {
            center: [53.198623507282086, 45.02078191919667],
            zoom: 13
        });
        <?php $coords = mysqli_query($connect, "SELECT `id`, `title`, `coord_lat`, `coord_lng`  FROM `dost_info`");
        $coords = $coords->fetch_all();
        foreach ($coords as $coord) { ?>
        var popup1 = DG.popup({
            maxWidth: 480,
            maxHeight: 400,
        }).setContent('<a class="popup_link"><?=$coord[1] ?></a>');
        DG.marker([<?=$coord[2] ?>, <?=$coord[3] ?>]).addTo(map).bindPopup(popup1);
        <?php } ?>

    });
</script>