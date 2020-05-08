<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");
$textt = "Вы успешно отправили заявку! Ожидайте звонка.";
if (!isset($_SESSION["cart"])) {
    $textt = "Корзина пуста!";
} else if (isset($_POST["name"]) && isset($_POST["adress"]) && isset($_POST["contacts"])) {
    $query = "INSERT INTO req(name, adress, contacts, cart) VALUES (";
    $query .= "'" . $_POST["name"] . "'" . ", ";
    $query .= "'" . $_POST["adress"] . "'" . ", ";
    $query .= "'" . $_POST["contacts"] . "'"   . ", ";
    $query .= "'" . json_encode($_SESSION["cart"], JSON_UNESCAPED_UNICODE) . "')";
    mysqli_query($db, $query);
    session_destroy();
} else {
    $textt = "Произошла ошибка. Ваш заявка не обработана.";
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FutureBuilding Shop</title>
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
        <div class="row" style="text-align: center">
            <div class="col-12">
                <span><?php echo $textt ?></span>
            </div>
        </div>
    </div>
    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding
        </div>
    </footer>
</body>

</html>