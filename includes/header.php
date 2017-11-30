<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}

$count = 0;

//retrieve cart content
if (isset ($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    
    if ($cart) {
        $count = array_sum($cart);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="styles/style.css" />
        <?php echo $style; ?>
    </head>
    <body>
        <header>
            <img id="logo" src="images/logo.png">
            <!--<input class="searchbar" type="search">
            <button class="searchbar" type="submit">Search</button>-->

            <h3 id="user"></h3>
        </header>
        <nav>
            <ul>
                <li></li>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="classes.php">IUPUI Classes</a></li>
                <li><a href="tutoring.php">Tutoring</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
                <li style="float:right"><a href="signup.php">Register</a></li>
            </ul>
        </nav>