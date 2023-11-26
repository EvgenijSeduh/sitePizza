<!DOCTYPE html>
<html lang="en">
<?php
$flag = false;
if ($_GET['user'] == 'autorization') {
    $flag = true;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="menu.php">Меню</a></li>
                <li><a href="autorizate.php">Авторизация</a></li>
                <?php
                if ($flag == true) { ?>
                    <li><a href="appeal.php">Обратная связь</a></li>
                    <li><button id="basket">Корзина</button></li>
                <?php } ?>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Добро пожаловать на Главную страницу</h1>
        <p>Приветствуем вас в нашем уютном ресторане, где каждый визит — это погружение в мир изысканной кухни и неповторимой атмосферы уюта. Наши шеф-повара с любовью готовят блюда из свежих ингредиентов, создавая настоящие кулинарные произведения искусства. В каждом бите наших блюд вы почувствуете тщательно подобранные вкусы, переносящие вас в путешествие по разнообразным кулинарным традициям. Приглашаем вас на уникальное гастрономическое приключение, где каждый момент становится особенным.</p>
    </main>

    <footer>
        <p>Контактная информация: example@email.com</p>
        <p>&copy; 2023 Магазин. Все права защищены.</p>
    </footer>

</body>

</html>