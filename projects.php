<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FutureBuilding Shop - Cart</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-light bg-light navbar-expand border">
        <a class="navbar-brand" href="index.php">FutureBuilding</a>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Меню
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="nav-link" href="shop.php">Каталог товаров</a>
                    <a class="nav-link" href="projects.php">Наши проекты</a>
                    <a class="nav-link" href="brigade.php">Строительная бригада</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Корзина</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="itemlist">
            <div class="proj-info col-12">
                <img class="proj-image" src="https://cdn.esoft.digital/640480/photos/f1d746c78e96888b918cef08a5a9e41e.jpg" title="Дом" width="100%"><br>
                <div class="proj-name">
                    <h3>ЖК Future-80085</h3>
                </div>
                <div class="proj-description">
                    ЖК Future-80085 это новый, многофункциональный жилой комплекс комфорт класса.
                </div>
                <div class="proj-contacts"><a href="phone.php" class="btn btn-success">Вы можете оставить заявку на сайте. Мы вам перезвоним!</a></div>
            </div>
            <div class="proj-info col-12">
                <img class="proj-image" src="https://homsters.cdnvideo.ru/eUwzdlJCamdrK05xWVlBSlNNdWNhR2JJT1BsOU5tT0l4TkdrOFBhYWE5RG9ZSmJkS09GMTZySXJ1MURoRUl6dHRvL2c1T1BWQTdZRlRhTXRLS2h5Zy9xdVpPNmg1RW56ei9iSHB4dVRkMkE9.png" title="Дом" width="100%"><br>
                <div class="proj-name">
                    <h3>ЖК Future-D34DM4U5</h3>
                </div>
                <div class="proj-description">
                    Hoвый 10-этaжный дoм в клaccичecкoм cтилe вoзвoдит cтpoитeльнaя кoмпaния «FutureBuilding».
                </div>
                <div class="proj-contacts"><a href="phone.php" class="btn btn-success">Вы можете оставить заявку на сайте. Мы вам перезвоним!</a></div>
            </div>
            <div class="proj-info col-12">
                <img class="proj-image" src="https://s.inaktau.kz/s/117/section/doska/upload/pers/117/img/doska/000/000/098/whatsapp-image-2020-02-27-at-172017_5e68c46ee4778.jpeg" title="Дом" width="100%"><br>
                <div class="proj-name">
                    <h3>ЖК Future-M4R4-M4U5</h3>
                </div>
                <div class="proj-description">
                    Новый и огромный жилой комплекс премиум класса от застройщика «FutureBuilding».
                </div>
                <div class="proj-contacts"><a href="phone.php" class="btn btn-success">Вы можете оставить заявку на сайте. Мы вам перезвоним!</a></div>
            </div>
        </div>
    </div>
    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding
        </div>
    </footer>
</body>