<?php
    if (isset($_POST['add'])) {
        if ($_POST['add'] == "ADD") {
            $name = $_POST['name'];
            $type = $_POST['brand'];
            $typeof = $_POST['phone_model'];
            $description = $_POST['description'];
            $price = (int)$_POST['price'];
            $img = $_POST['img'];
            $link = mysqli_connect("127.0.0.1", "root", "pass", "rush");
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
            $queryInsert = mysqli_query($link, "INSERT INTO `articles` (`name`, `brand`, `phone_model`, description, price, img) VALUES ('$name', '$type', '$typeof', '$description', '$price', '$img')");
        }
    }
?>
<form method="post" action="">
    <input type="text" name="name" value="" placeholder="name" /><br>
    <input type="text" name="brand" value="" placeholder="brand" /><br>
    <input type="text" name="phone_model" value="" placeholder="phone_model" /><br>
    <input type="text" name="description" value="" placeholder="description" /><br>
    <input type="text" name="price" value="" placeholder="price" /><br>
    <input type="text" name="img" value="" placeholder="img" /><br>
    <input type="submit" name="add" value="ADD" />
