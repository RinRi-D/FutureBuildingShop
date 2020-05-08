<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");

if (isset($_POST["del"])) {
    mysqli_query($db, "DELETE FROM cons WHERE `id`='" . $_POST["del"] . "'");
}

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FutureBuilding Shop - Заказы</title>
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
        <input class="form-control" id="myInput" type="text" placeholder="Поиск.."> <br>
        <div id="itemlist">
            <?php
            $result = mysqli_query($db, "SELECT * FROM cons");
            while ($myrow = mysqli_fetch_array($result)) { ?>
                <div class="proj-info col-12">
                    <div class="proj-name">
                        <h3>ID заявки: <?php echo $myrow["id"] ?></h3>
                    </div>
                    <div class="proj-description">
                        <span>ФИО: <?php echo $myrow["name"] ?></span><br>
                        <span>Телефон: <?php echo $myrow["phone"] ?></span>
                        <form action="cons.php" method="post">
                            <input type="hidden" name="del" value="<?php echo $myrow["id"] ?>">
                            <input type="submit" class="btn btn-danger" value="Удалить" />
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#itemlist .proj-info").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding.
        </div>
    </footer>
</body>

</html>