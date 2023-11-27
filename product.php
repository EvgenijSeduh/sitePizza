<!DOCTYPE html>
<html lang="en">

<?php
    $id = $_GET['id'];
    include "db.php";
    $result = mysqli_query($mysql, "SELECT * FROM `products` WHERE `id` = '$id'");
    $row = mysqli_fetch_array($result);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['name']?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="autorization..js"></script>
</head>

<body>

    <header>
        <div class="buttonBack">
    <a href="menu.php">Назад</a>
    </div>
    </header>

    <main>
            <center><img src="img/<?php echo $row['img']; ?>.jpg" width = "500px" height="600px" alt="Изображение продукта <?php echo $row['name']; ?>"></center>
            <center><p><?php echo $row['name']; ?></p></center>
            <center><p><?php echo $row['description']; ?></p></center>
            <center><p><?php echo $row['price']; ?></p></center>
    </main>

    <footer>
        <p>Контактная информация: example@email.com</p>
        <p>&copy; 2023 Магазин. Все права защищены.</p>
    </footer>

</body>

</html>