<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FutureBuilding Shop - Обзор заказа</title>
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
        <h1>ID заказа: <?php echo $_GET["id"] ?></h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Товар</th>
                <th>Кол.</th>
                <th>Цена</th>
                <th>Итого</th>
            </tr>
            <?php
            $result = mysqli_query($db, "SELECT * FROM req WHERE id=" . $_GET["id"] . "");
            $myrow = mysqli_fetch_array($result);
            $cart = json_decode($myrow["cart"], true);
            //echo $cart[0][0];
            if (!empty($cart)) {
                $total = 0;
                foreach ($cart as $keys => $values) {
            ?>
                    <tr>
                        <td><?php echo $values["item_id"] ?></td>
                        <td><?php echo $values["item_name"] ?></td>
                        <td><?php echo $values["item_quantity"] ?></td>
                        <td><?php echo $values["item_price"] ?> ₸</td>
                        <td><?php echo $values["item_price"] * $values["item_quantity"] ?> ₸</td>
                    </tr>
                <?php
                    $total = $total + ($values["item_price"] * $values["item_quantity"]);
                }
                ?>
                <tr>
                    <td colspan="4" style="text-align:right">Итого</td>
                    <td style="text-align:right"><?php echo $total ?> ₸</td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding
        </div>
    </footer>
</body>