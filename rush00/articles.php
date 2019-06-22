<?php
    function refresh($url = NULL) {
        if(empty($url)) {
            $url = $_SERVER['REQUEST_URI'];
        }
        header("Location: ".$url);
        exit();
    }
    $link = mysqli_connect("127.0.0.1", "root", "pass", "rush");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    ////    LINK TO BRAND OR MODEL  ////

    if ($_GET['page'] == "all") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles`");
    }
    if ($_GET['page'] == "samsung") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `brand`='samsung'");
    }
    if ($_GET['page'] == "oneplus") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `brand`='oneplus'");
    }
    if ($_GET['page'] == "huawei") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `brand`='huawei'");
    }
    if ($_GET['page'] == "apple") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `brand`='apple'");
    }
    if ($_GET['page'] == "ss10") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='ss10'");
    }
    if ($_GET['page'] == "sa70") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='sa70'");
    }
    if ($_GET['page'] == "sfold") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='sfold'");
    }
    if ($_GET['page'] == "sn9") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='sn9'");
    }
    if ($_GET['page'] == "op7") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='op7'");
    }
    if ($_GET['page'] == "op6t") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='op6t'");
    }
    if ($_GET['page'] == "op6") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='op6'");
    }
    if ($_GET['page'] == "hp30p") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='hp30p'");
    }
    if ($_GET['page'] == "hp30") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='hp30'");
    }
    if ($_GET['page'] == "hmatex") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='hmatex'");
    }
    if ($_GET['page'] == "ixs") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='ixs'");
    }
    if ($_GET['page'] == "ixr") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='ixr'");
    }
    if ($_GET['page'] == "i8") {
        $resQuery = mysqli_query($link, "SELECT * FROM `articles` WHERE `phone_model`='i8'");
    }

    ////    PRINT ARTICLES  ////
    echo "<div class='center'>";
    echo "<div class='table'>";
    echo "<table>";
    $i = 0;
    foreach ($resQuery as $elem) {
            echo "<tr>";
            echo "<td class='name'>".$elem['name']."</td>";
            echo "<td class='t_img'><img src='".$elem['img']."' alt='samsung'></td>";
            echo "<td class='desc'>".$elem['description']."</td>";
            echo "<td class='price'>".$elem['price']." $</td>";
            echo "<td><form method='post'><input type='hidden' name='hidden' value='$i'><input type='submit' name='submit' value='Buy'></form></td>";
            echo "</tr>";
            $i++;
    }
    echo "</table>";
    echo "</div>";
    echo "</div>";
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "Buy") {
            $i = (int)$_POST['hidden'];
            $find = 0;
            if (!$_SESSION['loggued_on_user']) {
                $login = $_SERVER['REMOTE_ADDR'];
                if (strstr($login, "::")) {
                    $login = trim(str_ireplace("::", " ", $login));
                }
            } else {
                $login = $_SESSION['loggued_on_user'];
            }
            $addr = $_SERVER['REMOTE_ADDR'];
            if (strstr($addr, "::")) {
                $addr = str_ireplace("::", " ", $login);
                $addr = trim($addr);
            }
            $ordered = 0;
            foreach ($resQuery as $elem) {
                if ($find == $i) {
                    $name = $elem['name'];
                    $price = $elem['price'];
                    $query = mysqli_query($link, "INSERT INTO `order` (login, `name`, price, ordered, addr) VALUES ('$login', '$name', '$price', '$ordered', '$addr')");
                    break ;
                }
                $find++;
            }
            refresh();
        }
    }
