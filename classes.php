<?php
$title = 'IUPUI Classes';
$style = '<link rel="stylesheet" href="styles/classes.css" />';

require_once 'includes/header.php';
require_once 'includes/database.php';

//select statement
$sql = "SELECT school, department, class_number, class_name, classes.book_id, books.book_id, title FROM classes, books WHERE classes.book_id = books.book_id ";

//execute the query
$query = $conn->query($sql);

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
    <table>
        <tr>
            <th>School:</th>
            <th>Dept:</th>
            <th>Class No.:</th>
            <th>Class Name:</th>
            <th>Book Needed:</th>
        </tr>
        <?php
        //create a while loop here to insert one row for each user.
        //inser a row into the table for each row of data
        while (($row = $query->fetch_assoc()) !== NULL){
        echo "<tr>";
        echo "<td>", $row['school'], "</td>";
        echo "<td>", $row['department'], "</td>";
        echo "<td>", $row['class_number'], "</td>";
        echo "<td>", $row['class_name'], "</td>";
        echo "<td><a href='bookDetails.php?id=", $row['book_id'],"'>", $row['title'], "</a></td>";
        echo "</tr>";
        }
        ?>
    </table>

</div><!--body-->

<?php
require_once 'includes/footer.php';