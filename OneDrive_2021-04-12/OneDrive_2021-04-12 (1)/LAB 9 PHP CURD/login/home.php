<?php
 
session_start();
// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
echo "welcome".$_SESSION['uname'];
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>