<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");
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
    <div id="myModal" class="modal bd-example-modal-sm" tabindex="-1" role="alert" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">Внимание!</div>
                <div class="modal-body"><span id="axaxa">Вы добавили товар в корзину.</span></div>
            </div>
        </div>
    </div>
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
        <input class="form-control" id="myInput" type="text" placeholder="Поиск..">
        <div id="itemlist">
            <?php
            $result = mysqli_query($db, "SELECT * FROM menu");
            while ($myrow = mysqli_fetch_array($result)) { ?>
                <div class="item-info col-12">
                    <img width="200px" src="<?php echo $myrow['imageid'] ?>">
                    <br>
                    <span class="item-name"><?php echo $myrow['name'] ?></span> <br>
                    <span class="item-cost"><?php echo $myrow['cost'] ?> ₸</span> <br>
                    <input class="col-6" min="1" type="number" name="Количество" id="<?php echo $myrow['id'] ?>" value=1>
                    <button onclick="myFunction(<?php echo $myrow['id'] ?>)" class="btn btn-primary add-to-cart col-4"></button>
                </div>
            <?php } ?>
        </div>
    </div>

    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#itemlist div").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        function myFunction(idid) {
            var x = document.getElementById(idid).value;
            if (x > 0) {
                jQuery(document).ready(function($) {
                    $.ajax({
                        type: 'GET',
                        url: 'add.php',
                        data: {
                            itemid: idid,
                            quan: x
                        },
                        success: function(res) {
                            $('#myModal').modal('show')
                        }
                    });
                });
            } else {
                alert("Нужно положительное количество товаров!");
            }
        }

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
</body>

</html>