<?php
/*
Здесь  будет находиться  карта по выбору местоположения. Джеквери нужен здесь для
передачи данных, после будет идти обработка данных в свиче в какую комнату кинуло.
надо не забывать о работе со сессией или лучше использовать куки.Так же здесь должен
присутствовать файл ксс по карте и флажкам.
Создать div(класс)  блок  по выпадающему меню, установить его в правом вверхнем углу.
при выборе  списка должен открыться еще один список(список в списке), а после выбора показывать
флажок на карте по выбраному месту и возможность перейти по нему.
*/
?>
<?require_once ('func.php');?>
<html>
<head>
    <title>Карта города</title>
    <link href="css/map.css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/menu.js"></script>
</head>
<body>
<form action="func.php" method="POST">
<nav>
    <ul class="dropdown">
        <li class="drop"><a href="#">Выберите категорию заведений</a>
            <ul class="sub_menu">
                <li><a href="<?php map_list(1)?>">Клубы</a></li>
            </ul>
        </li>
</nav>
</form>
</body>
</html>


