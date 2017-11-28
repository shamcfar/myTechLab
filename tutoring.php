<?php
$title = "Tutoring";
$style = '<link rel="stylesheet" href="styles/tutor.css" />';

require_once 'includes/header.php';
?>

<div id="body" style="height: 150px">
     <h2 id="instructions">Please Choose the Tutoring Method That You Prefer</h2>
    <div id="tutorButtons">
        <a href="chat.php"><button class="tutorButton" style="margin-left:12%;">I want to chat with a tutor</button></a>
        <a href="websites.php"><button class="tutorButton" style="margin-left: 38%">I want to look up resources</button></a>
        <a href="videos.php"><button class="tutorButton" style="margin-left:65%;">I want to watch tutorial videos</button></a>
    </div><!--tutorButtons-->

    <img class="tutorIcons" src="images/chat.png" style="margin-left:10%;">
    <img class="tutorIcons" src="images/websites.png" style="margin-left:38%">
    <img class="tutorIcons" src="images/videos.png" style="margin-left:65%;">
</div><!--body-->
            
<?php
require_once 'includes/footer.php';