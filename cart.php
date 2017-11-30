<?php
$title = "Shopping Cart";
$style = '<link rel="stylesheet" href="styles/cart.css" />';

require_once 'includes/header.php';
require_once 'includes/database.php';
?>

<div id="body">
    <h1>My shopping cart</h1>
    
</div>

<?php
if (!isset($_SESSION['cart']) || !$_SESSION['cart']) {
    echo "<p>Your shopping cart is empty.<br><br></p>";
    include ('includes/footer.php');
    exit();
}

//proceed since the cart is not empty
$cart = $_SESSION['cart'];
?>

<table class="booklist">
    <tr>
        <th style="width: 500px">Title</th>
        <th style="width: 60px">Price</th>
        <th style="width: 60px">Quantity</th>
        <th style="width: 60px">Total</th>
    </tr>
    <?php
    //insert code to display the shopping cart content
    //select statement
    $sql = "SELECT book_id, title, price FROM books WHERE 0";
    
    foreach (array_keys($cart) as $id) {
        $sql .= " OR book_id=$id";
    }
    
    //execute the query
    $query = $conn->query($sql);
    
    //fetch books and display them in a table
    $grandTotal = 0;
    while ($row = $query->fetch_assoc()) {
        $id = $row['book_id'];
        $title = $row['title'];
        $price = $row['price'];
        $qty = $cart[$id];
        $total = $qty * $price;
        echo "<tr>",
                "<td><a href='bookdetails.php?id=$id'>$title</a></td>",
                "<td>$$price</td>",
                "<td>$qty</td>",
                "<td>$$total</td>",
                "</tr>";
        $grandTotal += $total; 
    }
    ?>
    <tr>
        <td colspan=4 style='text-align:right;'>$<?php echo $grandTotal; ?></td>
    </tr>
</table>

<br>
<div class="bookstore-button">
    <input type="button" value="Checkout" onclick="window.location.href = 'checkout.php'"/>
    <input type="button" value="Cancel" onclick="window.location.href = 'classes.php'" />
</div>
<br><br>

<?php
require_once 'includes/footer.php';