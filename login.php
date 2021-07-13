


<section class = "signup-form">
    <h2>Sign Up</h2>
    <div class = "signup-form-form"
    <form action = "Includes/login.inc.php" method = "post"> 
        <input type = "text" name = "uid" placeholder = "Username/Email">
        <input type = "password" name = "pwd" placeholder = "Password">
        <button type = "submit" name = "submit">Login</button>
        </form>
    </div>
    <?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in All Fields</p>";
        }
        else if ($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect Login</p>";
        }
    }
?>
</section>

<footer id="footer">&copy; Copyright 2021 kellerbee.com</footer>

