<?php
$title = "Books needed";
$style = '<link rel="stylesheet" href="styles/book.css" />';

require_once 'includes/header.php';
require_once 'includes/database.php';

//retrieve book id from a query string
if (!filter_has_var(INPUT_GET, 'id')) {
    echo "Error: book was not found.";
    require_once ('includes/footer.php');
    exit();
}
$book_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//select statement
$sql = "SELECT * FROM books WHERE book_id=" . $book_id;

//execute the query
$query = $conn->query($sql);

//retrieve results
$row = $query->fetch_assoc();

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    require_once ('includes/footer.php');
    exit;
}

?>

<div id="body">
    <h2>Book Details</h2>
    <table class="bookdetails">
        <tr>
            <td class="col1">
                <img src="<?php echo $row['book_image']; ?>">
            </td>
            <td class="col2">
                <h4>Title:</h4>
                <h4>Author:</h4>
                <h4>ISBN:</h4>
                <h4>Price:</h4>
                <h4>Type:</h4>
                <h4>Format:</h4>
            </td>
            <td class="col3">
                <p><?php echo $row['title']; ?></p>
                <p><?php echo $row['author']; ?></p>
                <p><?php echo $row['ISBN']; ?></p>
                <p>$<?php echo $row['price']; ?></p>
                <p><?php echo $row['type']; ?></p>
                <p><?php echo $row['format']; ?></p>
            </td>
            <td class="col4">
            <a href="addtocart.php?id=<?php echo $row['book_id'] ?>">
                <img src="images/addtocart_button.png" />
            </a>
            </td>
        </tr>
    </table>

</div><!--body-->

<?php
//cleanup results
$query->close();

//close connection
$conn->close();

//include footer
require_once 'includes/footer.php';