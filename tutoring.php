<?php
$title = "Tutoring";
$style = '<link rel="stylesheet" href="styles/tutor.css" />';

require_once 'includes/header.php';
?>

 <div id="body">
     <h2 id="instructions">Please Choose the Tutoring Method That You Prefer</h2>
    <div id="tutorButtons">
        <a href="chat.php"><button id="chatButton">I want to chat with a tutor</button></a>
        <a href="videos.php"><button id="videoButton">I want to watch tutorial videos</button></a>
    </div><!--tutorButtons-->

    <img class="tutorIcons" src="images/chat.png" style="margin-left:10%;">
    <img class="tutorIcons" src="images/videos.png" style="margin-left:65%;">
</div><!--body-->
            
<?php
require_once 'includes/footer.php';