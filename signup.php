<?php

?>


<section class = "signup-form">
    <h2>Login</h2>
    <div class = "signup-form-form"
    <form action = "includes/signup.inc.php" method = "post"> </form>
        <input type = "text" name = "name" placeholder = "full name">
        <input type = "text" name = "Email" placeholder = "Email">
        <input type = "text" name = "uid" placeholder = "Username">
        <input type = "password" name = "pwd" placeholder = "Password">
        <input type = "password" name = "pwdrepeat" placeholder = "Repeat Password">
        <button type = "submit" name = "submit">Sign Up</button>
    </div>
    </form>
<?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in All Fields</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>Choose a proper username</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Choose a proper email</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Passwords doesn't match</p>";
        }
        else if ($_GET["error"] == "stmtfaield"){
            echo "<p>Something went wrong try again</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p>You have signed up</p>";
        }
    }
?>
</section>

