<?php  
// Include config file
require_once "dbconnect.php";
session_start();
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
            $_SESSION['uname'] = $username;
            header('Location: home.php');

        }else{
           header('Location: index.php');
}
}
?>