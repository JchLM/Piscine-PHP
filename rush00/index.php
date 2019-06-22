<?php
    session_start();
    $order = 0;
    
    ////    MODEL   ////

    if (!isset($_GET['page']) || $_GET['page'] == "home") {
        $page = "./home.html";
    }

    ////    ITEMS   ////

    if ($_GET['page'] == "all" || $_GET['page'] == "samsung" || $_GET['page'] == "oneplus" || $_GET['page'] == "huawei" || $_GET['page'] == "apple" || $_GET['page'] == "ss10" || $_GET['page'] == "sa70" || $_GET['page'] == "sfold" || $_GET['page'] == "sn9" || $_GET['page'] == "op7" || $_GET['page'] == "op6t" || $_GET['page'] == "op6" || $_GET['page'] == "hp30p" || $_GET['page'] == "hp30" || $_GET['page'] == "hmatex" || $_GET['page'] == "ixs" || $_GET['page'] == "ixr" || $_GET['page'] == "i8" ) {
        $page = "./articles.php";
    }

    ////    PANIER  ////

    if ($_GET['page'] == "panier") {
        $page = "panier.php";
        }
    ////    AUTHORIZE   ////

    if ($_GET['page'] == "create") {
        $page = "account/create.php";
    }
    if ($_GET['page'] == "login") {
        $page = "account/login.php";
    }
    if ($_GET['page'] == "logout") {
        $page = "account/logout.php";
    }
    if ($_GET['page'] == "modif") {
        $page = "account/modif.php";
    }

    ////    ADMIN   ////

    if ($_GET['admin'] == "admin") {
        header("location: admin/admin.php");

    }

    ////    SAVE IP    ////
    if (!$_SESSION['loggued_on_user']) {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (strstr($login, "::")) {
            $ip = trim(str_ireplace("::", " ", $login));
        }
    } else {
        $ip = $_SESSION['loggued_on_user'];
    }
    

    ////    CONNECT TO DATABASE ////

    $link = mysqli_connect("127.0.0.1", "root", "pass", "rush");

    if (mysqli_connect_errno()) 
    {
        try {
            include("install.php");
        } catch (mysqli_sql_exception $ex) {
            printf("Connection failed: %s\n", mysqli_connect_error());
            exit();
        }
    }
    
    ////    CHECK ORDERS   ////

    if ($resLogQueryBask = mysqli_query($link, "SELECT * FROM `order` WHERE login='$login' AND ordered='0'")) {
        foreach ($resLogQueryBask as $elem) {
           $order++;
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/front.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/body.css">
    <title>PHONESTORE</title>
</head>
<body>
    <header>
        <nav>
            <ul class="topmenu">
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=all" class="down">SHOP</a>
                    <ul class="submenu down_down">
                        <li><a href="index.php?page=samsung">Samsung</a>
                            <ul class="bottommenu">
                                <li><a href="index.php?page=ss10">S10</a></li>
                                <li><a style="color: red; text-decoration: line-through" href="index.php?page=sa70">Galaxy A70</a></li>
                                <li><a style="color: red; text-decoration: line-through" href="index.php?page=sfold">Fold</a></li>
                                <li><a style="color: red; text-decoration: line-through" href="index.php?page=sn9">Note 9</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=oneplus">Oneplus</a>
                            <ul class="bottommenu">
                                <li><a href="index.php?page=op7">7</a></li>
                                <li><a href="index.php?page=op6t">6T</a></li>
                                <li><a href="index.php?page=op6">6</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=huawei">Huawei</a>
                            <ul class="bottommenu">
                                <li><a href="index.php?page=hp30p">P30 Pro</a></li>
                                <li><a href="index.php?page=hp30">P30</a></li>
                                <li><a href="index.php?page=hmatex">Mate X</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=apple">Apple</a>
                            <ul class="bottommenu">
                                <li><a href="index.php?page=ixs">Iphone Xs</a></li>
                                <li><a href="index.php?page=ixr">Iphone XR</a></li>
                                <li><a href="index.php?page=i8">Iphone 8</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> 
  
                
                <?php
                ////    CHECK IF USER IS CONNECTED    ////
                if ($_SESSION['loggued_on_user'] == "") {
                        echo "<li><a href=\"index.php?page=login\">Login</a></li>";
                    } else {
                        echo "<li><a href=\"index.php?page=modif\">".$_SESSION['loggued_on_user']."</a></li>";
                        echo "<li><a href=\"index.php?page=logout\">LogOut</a></li>";
                    }
                ?>
                <li><a href="index.php?page=panier">Panier</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <?php include $page; ?>
    </div>
</body>
</html>

