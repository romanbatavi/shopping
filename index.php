<?php

    include_once("function/helper.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Roman Shop</title>
        <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <div id='container'>
            <div id='header'>
                <a href="<?php echo BASE_URL."index.php"; ?>">
                    <img src="<?php echo BASE_URL."images/logo2.png"; ?>"/>
                </a>
            
            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a>
                    <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a>
                </div>
                <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>"/>
                </a>
            </div>
            </div>

            <div id="content">

            </div>

            <div id="footer">
                <p>© Roman Shop : Roman Batavi 2018</p>
            </div>
        </div>
    </body>
</html>