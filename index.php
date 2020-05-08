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
        <h1>FutureBuilding</h1>
        <img src="https://i.ibb.co/fdL3KrG/Future-Building.png" alt="Future-Building" class="rightimg" width="40%">
        <p>FutureBuilding - крупный строительный холдинг, лидер на рынке строительства Казахстана. Холдинг работает с 2003 года и за это время заслужил репутацию профессионала и надежного партнера.</p>
        <p>FutureBuilding сегодня – многопрофильный холдинг, структуру которой составляют дивизионы и дирекции в различных сферах прадажи строительных материалов, строительства, девелопмента и инжиниринга.</p>
        <p>
            Наша Компания (16 лет в строительном рынке)
            <ul>
                <li>Успешно развивается, создаёт тысячи рабочих мест, оказывает значительное влияние на развитие экономики Казахстана</li>
                <li>Строит жилье всех уровней комфортности</li>
                <li>Управляет десятками строительными бригадами</li>
                <li>Развивает строительство за пределами Казахстана</li>
                <li>Реализует проекты повышенной сложности для международных нефтегазовых компаний и осваивает рынки ближнего зарубежья</li>
                <li>Участвует в масштабных государственных программах в сфере строительства</li>
                <li>Заботится о профессиональном росте своих сотрудников и их постоянном обучении</li>
                <li>Сдает свои объекты в срок</li>
                <li>Активно занимается благотворительной деятельностью</li>
                <li>Построено более 4,5 миллионов квадратных метров: жилые комплексы, коттеджные поселки, коммерческая недвижимость, инфраструктурные и промышленные объекты</li>
                <li>Продано строительных материалов на 11.6 млрд тенге.</li>
                <li>Присутствие в сегментах строительной отрасли</li>
                <li>В холдинге работает 8000 высококвалифицированных сотрудников, объединенных предпринимательской корпоративной культурой.</li>
            </ul>
        </p>
        <p>Холдинг ориентируется на лучшие мировые практики корпоративного управления, придерживаясь международных стандартов финансовой прозрачности, этических принципов ведения бизнеса, командного корпоративного духа.</p>
        <p>Холдинг работает по принципу «Выбирай лучшее»: проект, команду, технологии, менеджмент. Более 20 руководителей Future Building получили степень MBA.</p>

        <h2>"Мы строим будущее!"</h2>
    </div>
    <footer class="page-footer font-small blue border">
        <div class="footer-copyright text-center py-3">
            ©FutureBuilding
        </div>
    </footer>
</body>