<?php
    session_start();
    if (!isset($_GET['page'])) {
        $page = "info.php";
    }
    if ($_GET['page'] == "users") {
        $page = "users.php";
    }
    if ($_GET['page'] == "articles") {
        $page = "articles.php";
    }
    if ($_GET['page'] == "orders") {
        $page = "orders.php";
    }
    if ($_GET['page'] == "add") {
        $page = "add.php";
    }
    if ($_GET['page'] == "logout") {
        $page = "logout_admin.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    
    <link rel="stylesheet" href="../css/app.css">
    <title>ADMIN</title>
</head>
<body>
<?php if ($_SESSION['admin'] == true) {?>
<header>
    <nav>
        <ul class="topmenu">
            <li><a href="work.php?page=users">Users</a></li>
            <li><a href="work.php?page=articles">Articles</a></li>
            <li><a href="work.php?page=orders">Orders</a></li>
            <li><a href="work.php?page=add">Add Articles</a></li>
            <li><a href="work.php?page=logout">Log out</a></li>
        </ul>
    </nav>
</header>
<div class="container">
    <?php include $page; ?>
</div>
<?php }  {?>
<?php }?>
</body>
</html>
