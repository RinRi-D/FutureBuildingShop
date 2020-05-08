<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FutureBuilding Shop - Панель управления</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-light bg-light navbar-expand border">
        <a class="navbar-brand" href="worker.php">Admin</a>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Меню
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="nav-link" href="view.php">Просмотр заказов</a>
                    <a class="nav-link" href="add-item.php">Добавить товар в базу данных</a>
                    <a class="nav-link" href="cons.php">Заявки на перезвон</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2>Панель управления компанией</h2>
        <p>Здесь работники могут управлять базой данных товаров, смотреть заказы и заявки на перезвон.</p>
        <p>Навигация по панели управления находится выше.</p>
        <p>Удачной работы!</p>
    </div>

    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding.
        </div>
    </footer>
</body>

</html>