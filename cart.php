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
                <a class="nav-link active" href="cart.php">Корзина</a>
            </li>
        </ul>
    </nav>
    <div class="container">

        <table class="table table-bordered">
            <tr>
                <th>Товар</th>
                <th>Кол.</th>
                <th>Итого</th>
                <th></th>
            </tr>
            <?php
            if (!empty($_SESSION["cart"])) {
                $total = 0;
                foreach ($_SESSION["cart"] as $keys => $values) {
            ?>
                    <tr>
                        <td><?php echo $values["item_name"] ?></td>
                        <td><?php echo $values["item_quantity"] ?></td>
                        <td><?php echo $values["item_price"] * $values["item_quantity"] ?> ₸</td>
                        <td><button onclick="delitem(<?php echo $values['item_id'] ?>)" class="btn btn-danger">X </button></td>
                    </tr>
                <?php
                    $total = $total + ($values["item_price"] * $values["item_quantity"]);
                }
                ?>
                <tr>
                    <td colspan="2" style="text-align:right">Итого</td>
                    <td style="text-align:right"><?php echo $total ?> ₸</td>
                    <td></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <button onclick="destr()" class="btn btn-danger">Очистить корзину</button>
        <div class="send">
            <h3>Подать заявку</h3>
            <form action="submit.php" method="post">
                <input id="fname" required type="text" name="name" placeholder="Ваше полное имя" /> <br>
                <input id="fadress" required type="text" name="adress" placeholder="Ваш адрес" /> <br>
                <input id="fcontacts" required type="text" name="contacts" placeholder="Ваши контакты" /> <br>

                <input class="btn btn-success" type="submit" value="Подать заявку" />
            </form>
        </div>
    </div>

    <script>
        function delitem(idid) {
            jQuery(document).ready(function($) {
                $.ajax({
                    type: 'GET',
                    url: 'delete.php',
                    data: {
                        action: "delete",
                        del: idid
                    },
                    success: function(res) {
                        location.reload();
                    }
                });
            });
        }

        function destr() {
            jQuery(document).ready(function($) {
                $.ajax({
                    type: 'GET',
                    url: 'destroy.php',
                    data: {},
                    success: function(res) {
                        location.reload();
                    }
                });
            });
        }
    </script>
    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding
        </div>
    </footer>
</body>