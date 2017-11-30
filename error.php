<?php

$title = "MyTechLab Error";
$style = '<link rel="stylesheet" href="styles/error.css" />';
require_once 'includes/header.php';

$error='Default error.';
if(isset($_GET['m'])) {
    $error = trim($_GET['m']);
}
?>
<h2>Error</h2>

<table style="width: 100%; border: none">
    <tr>
        <td style="vertical-align: middle; text-align: center; width:100px">
            <img src='www/img/error.png' style="width: 80px; border: none"/>
        </td>
        <td style="text-align: left; vertical-align: top;">
            <h3>Sorry, but an error has occurred.</h3>
            <div style="color: red">
                <?= $error ?>
            </div>
            <br>
        </td>
    </tr>
</table>
<br><br><br><br><br>
<?php
require_once 'includes/footer.php';
