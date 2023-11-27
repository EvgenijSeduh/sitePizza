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
    <script src="slideshow.js"></script>
</head>

<body>

    <header>
        <?php
        if ($flag == false) { ?>
            <nav>
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="menu.php">Меню</a></li>
                    <li><a href="autorizate.php">Авторизация</a></li>
                </ul>
            </nav>
        <?php } else {
            include 'headerMenu.php';
        }
        ?>
    </header>

    <main>
        <h1>Добро пожаловать на Главную страницу</h1>
        <p>Приветствуем вас в нашем уютном ресторане, где каждый визит — это погружение в мир изысканной кухни и неповторимой атмосферы уюта. Наши шеф-повара с любовью готовят блюда из свежих ингредиентов, создавая настоящие кулинарные произведения искусства. В каждом бите наших блюд вы почувствуете тщательно подобранные вкусы, переносящие вас в путешествие по разнообразным кулинарным традициям. Приглашаем вас на уникальное гастрономическое приключение, где каждый момент становится особенным.</p>
        <div id="slideshow">
        <img class = "slide" src="img/slide1.jpg" alt="Slide 1">
        <img class = "slide" src="img/slide2.jpg" alt="Slide 2">
        <img class = "slide" src="img/slide3.jpg" alt="Slide 3">
    </div>

    </main>

    <footer>
        <p>Контактная информация: example@email.com</p>
        <p>&copy; 2023 Магазин. Все права защищены.</p>
    </footer>

</body>

</html>