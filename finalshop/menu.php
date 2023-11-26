<!DOCTYPE html>
<html lang="en">

<?php
    include "db.php";
    $result = mysqli_query($mysql, "SELECT * FROM `products`");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="menu.php">Меню</a></li>
                <li><a href="autorizate.php">Авторизация</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="card">
            <img src="img/<?php echo $row['img']; ?>.jpg" width = "200px" height="200px" alt="Изображение продукта <?php echo $row['name']; ?>">
            <p><?php echo $row['name']; ?></p>
            <p><?php echo $row['description']; ?></p>
            <p><?php echo $row['price']; ?></p>
            <a href="product.php?id=<?php echo $row['id']; ?>">Подробнее</a>
        </div>
    <?php endwhile; ?>
    </main>

    <footer>
        <p>Контактная информация: example@email.com</p>
        <p> 2023 Магазин. Все права защищены.</p>
    </footer>

</body>

</html>