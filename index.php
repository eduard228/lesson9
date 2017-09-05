<?php
require_once './products.php'; //подключили файл с скриптом
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>МАГАЗИН</title>

    <!— Bootstrap core CSS —>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--    Подключили Bootstrap-->
    <link href="css/album.css" rel="stylesheet">
</head>
<body>
<div class="album text-muted">
    <div class="container">
        <a class="row">
<!--            --><?php //foreach ($products as $product) : ?>
<!--                <div class="card">-->
<!--                    <img src="--><?//= getImg($product) ?><!--"/>-->
<!--                    <span>Наименование: --><?php //echo getName($product) ?><!--</span>-->
<!--                    <p class="card-text">Описание: --><?php //echo getDescription($product) ?><!--</p>-->
<!--                    <span>Цена: --><?php //echo getPrice($product) ?><!--</span>-->
<!--                    <a href="--><?//= getLink($product) ?><!--" target="_blank" >Купить</a>-->
<!---->
<!--                </div>-->
<!--            --><?php //endforeach; ?>
            <?php foreach ($products_new as $product) : ?>
            <div class ="card">
                 <h6>Название: <?=$product ['name']?> </h6>
                 <span>Цена: <?= $product ['price']?></span>
                 <p>Описание: <?= $product ['description']?></p>
                 <img src="<?= $product ['img']?>" alt="фото">
                 <a href="<?= $product ['link'] ?>" >Купить</a>
                <p>
                    Доступная цвета: <br>
                    <?php foreach ($product['colors'] as $color ): ?>
                    <span><?= $color ?>, </span>
                    <?php endforeach; ?>
                </p>
                <p>
                    Доступные цвета: <br>
                    <?= implode(', ', $product['colors']) ?>

                </p>
    </div>
    <?php endforeach; ?>
        </div>
    </div>

</body>
</html>