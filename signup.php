<?php
$title = 'Registration';
$style = '<link rel="stylesheet" href="styles/register.css" />';

require_once 'includes/header.php';
require_once 'includes/database.php';
?>

<div id="body">
    <form id="registration" action="registration.php" method="get">
        <label><b>Username:</b></label>
        <input type="text" placeholder="Enter username" name="username" required><br>
        <label><b>First Name:</b></label>
        <input type="text" placeholder="Enter first name" name="first_name" required><br>
        <label><b>Last Name:</b></label>
        <input type="text" placeholder="Enter last name" name="last_name" required><br>
        <label><b>e-mail:</b></label>
        <input type="text" placeholder="Enter e-mail" name="email" required><br>
        <label><b>Password:</b></label>
        <input type="password" placeholder="Enter password" name="password" required><br>
        <label><b>Confirm password:</b></label>
        <input type="password" placeholder="Confirm password" name="confirmPass" required><br>
        <label><b>Select your role</b></label>
        <input type="radio" name="role" value="student" required>Student
        <input type="radio" name="role" value="tutor" required>Tutor
        <br><br>
        <input type="checkbox" checked="checked">Remember Me


        <p>By creating an account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </form>
</div><!--body-->
            
<?php 
require_once 'includes/footer.php';