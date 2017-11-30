<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}

//if book id cannot be found, terminate script.
if (!filter_has_var(INPUT_GET, 'id')) {
    $error = "Book id not fount. Operation cannot preceed.<br><br>";
    header("Location: error.php?m=$error");
    die();
}

//retrieve book id and make sure it si a numeric value.
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!is_numeric($id)) {
    $error = "Invalid book id. Operation cannot proceed.<br><br>";
    header("Location: error.php?m=$error");
    die();
}

if (array_key_exists($id, $cart)) {
    $cart[$id] = $cart[$id] + 1;
} else {
    $cart[$id] = 1;

}

//update the session variable
$_SESSION['cart'] = $cart;

//redirect to the shopping cart
header('Location: cart.php');