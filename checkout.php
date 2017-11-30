<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//empty the shopping cart
$_SESSION['cart'] = '';

//set title page
$title = "MyTechLab Book Checkout";
$style = '<link rel="stylesheet" href="styles/checkout.css" />';

//display the header
require_once 'includes/header.php';

?>

<h2 id="title">Checkout</h2>

<p id="thanks">Thank you for shopping with us. Your business is greatly appreciated. You will be notified once your items are shipped.</p>

<?php
include_once 'includes/footer.php';
?>