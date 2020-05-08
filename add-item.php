<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");
$textt = "";
if (isset($_POST["name"]) && isset($_POST["cost"]) && isset($_POST["imageid"])) {
    $query = "INSERT INTO menu(name, cost, imageid) VALUES ('" . $_POST["name"] . "', '" . $_POST["cost"] . "', '" . $_POST["imageid"] . "')";
    mysqli_query($db, $query);
    $textt = "Вы успешно добавили товар в базу данных!";
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FutureBuilding Shop - Добавление товара в базу данных</title>
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
        <div class="row" style="text-align: center">
            <div class="col-12">
                <span><?php echo $textt ?></span>
            </div>
        </div>
        <div class="send">
            <h3>Добавить товар в базу данных</h3>
            <form action="add-item.php" method="post">
                <input type="text" required name="name" placeholder="Название товара" /> <br>
                <input type="number" required name="cost" placeholder="Стоимость" /> <br>
                <input type="text" required name="imageid" placeholder="URL к фотографии товара" /><br>
                <input class="btn btn-success" type="submit" value="Добавить в БД" />
            </form>
        </div>
    </div>
    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding
        </div>
    </footer>
</body>