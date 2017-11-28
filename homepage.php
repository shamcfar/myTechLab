<?php
$title = "My Tech Lab";
$style = '<link rel="stylesheet" href="styles/home.css" />';

require_once 'includes/header.php';
?>

<div id="body">
    <p class="heading" style="margin-left:18%;">Books</p>
    <p class="heading" style="margin-left:70%;">Videos</p>
    <p class="category" style="margin-left:6%;">Most Popular</p>
    <p class="category" style="margin-left:28%;">New Arrival</p>
    <p class="category" style="margin-left:55%;">Most Popular</p>
    <p class="category" style="margin-left:83%;">New Arrival</p>

    <img id="htmlBook" class="bookcover" src="images/html.png" style="margin-left:3%;">
    <img id="jsBook" class="bookcover" src="images/js.png" style="margin-left:25%;">
    <iframe class="youtubeVid" style="margin-left:52%;" src="https://www.youtube.com/embed/Wz2klMXDqF4" frameborder="0" allowfullscreen></iframe>
    <iframe class="youtubeVid" style="margin-left:80%;" src="https://www.youtube.com/embed/y3UH2gAhwPI" frameborder="0" allowfullscreen></iframe>


    <div id="captions">
        <pre class="bookCaption" style="margin-left:6%;">
            HTML &amp; CSS
            Price:<span style="text-decoration: line-through;color: red;">$30.21</span>
            $15.99
        </pre>
        <pre class="bookCaption" style="margin-left:29%;">
            JavaScript
            Price: $49.59
        </pre>
        <pre class="vidCaption" style="margin-left:55%;">
            CSS Tutorial for
            Beginners
        </pre>
        <pre class="vidCaption" style="margin-left:82%;">
            HTML &amp; CSS Tutorial
        </pre>
    </div><!--captions-->
</div><!--body-->

<?php 
require_once 'includes/footer.php';