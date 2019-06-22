<?php
$link = mysqli_connect("127.0.0.1", "root", "pass");
$query = mysqli_query($link, "CREATE DATABASE IF NOT EXISTS rush");
$link = mysqli_connect("127.0.0.1", "root", "pass", "rush");

////  TABLES  ////


$queryItems = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `articles` (
      `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(20) NOT NULL,
      `brand` varchar(10) NOT NULL,
      `phone_model` varchar(10) NOT NULL,
      `description` varchar(700) NOT NULL,
      `price` int(10) NOT NULL,
      `img` varchar(500) NOT NULL,
      PRIMARY KEY (`id`)
    ) AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");
$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `order` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) DEFAULT NULL,
      `name` varchar(16) NOT NULL,
      `price` int(11) NOT NULL,
      `ordered` int(11) NOT NULL,
      `addr` varchar(30) NOT NULL,
      PRIMARY KEY (`id`)
    ) DEFAULT CHARSET=utf8");
$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) NOT NULL,
      `email` varchar(60) NOT NULL,
      `password` varchar(500) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");

$query = mysqli_query($link, "ALTER TABLE articles AUTO_INCREMENT = 1");
$query = mysqli_query($link, "ALTER TABLE order AUTO_INCREMENT = 1");


$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Samsung S10','samsung', 'ss10', 'The Samsung S10 is vraiment tres flexx.', 909, 'https://static.boutique.orange.fr/media-cms/mediatheque/636x900-galaxy-s10-noir-prisme-vue-1-140952.png')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Samsung Galaxy A70','samsung', 'sa70', 'OUT OF STOCK !!!', 409, 'https://static.boutique.orange.fr/media-cms/mediatheque/636x900-vue1---samsung-galaxy-a70-blanc-148510.png')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Samsung Galaxy Fold','samsung', 'sfold', 'OUT OF STOCK !!!', 2000, 'https://web.roularta.be/if/c_crop,w_1999,h_1333,x_0,y_0,g_center/c_fit,w_620,h_413/aa6949c38e7e5a73805b9ccfe3924d3f.jpg')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Samsung Galaxy Note 9','samsung', 'sn9', 'OUT OF STOCK !!!', 669, 'https://image.samsung.com/fr/smartphones/galaxy-note9/buy/img_product_black_02.png?$ORIGIN_JPG$')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Oneplus 7','oneplus', 'op7', 'The Oneplus 7 est trop cool askip.', 700, 'https://image01.oneplus.net/ebp/201904/29/122/d36a14233fc973a4c012d6e369b1821c.png')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Oneplus 6t','oneplus', 'op6t', 'The Oneplus 6T est cool aussi.', 600, 'https://image01.oneplus.net/ebp/201811/08/691/7fb3ba460951f3cf07bf67a4b2849dc8.png')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Oneplus 6','oneplus', 'op6', 'The Oneplus 6 est genial.', 500, 'https://images.frandroid.com/wp-content/uploads/2019/04/oneplus-6-rouge.png')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Huawei P30 Pro','huawei', 'hp30p', 'The Huawei P30P est genial.', 1000, 'https://s7.s-sfr.fr/mobile/uc/device/jtk9ek4r/400x540_vogue_orange_front.png?ts=1553510420334')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Huawei P30','huawei', 'hp30', 'The Huawei P30 est genial.', 800, 'https://s7.s-sfr.fr/mobile/uc/device/jtk9oz3g/400x540_elle_black_front.png?ts=1553271424206')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Huawei Mate X','huawei', 'hmatex', 'The Huawei Mate X est genial.', 3600, 'https://images.frandroid.com/wp-content/uploads/2019/04/huawei-mate-x.png')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Iphone XS','apple', 'ixs', 'The Iphone Xs.', 1155, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone/xs/iphone-xs-select-2019-family?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1550795428390')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Iphone XR White','apple', 'ixr', 'White.', 855, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone/xr/iphone-xr-white-select-201809?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1551226036668')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Iphone XR Black','apple', 'ixr', 'Black.', 855, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone/xr/iphone-xr-black-select-201809?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1551226038992')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Iphone XR Blue','apple', 'ixr', 'Blue.', 855, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone/xr/iphone-xr-blue-select-201809?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1551226036356')");
$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Iphone XR Red','apple', 'ixr', 'Red.', 855, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone/xr/iphone-xr-red-select-201809?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1551226038669')");

$query = mysqli_query($link, "INSERT INTO rush.articles (`name`, `brand`, `phone_model`, `description`, `price`, `img`) VALUES ('Iphone 8','apple', 'i8', 'The Iphone 8 yaa', 685, 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone8/select/iphone8-select-2019-family?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1550795431127')");


?>