<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "webtachlab";
$conn = new mysqli($servername, $user, $pass, $db) or die("Unnable to connect");

$tbq = "SELECT * FROM book";
if(empty(mysqli_query($conn,$tbq))){
    $qeury = "CREATE TABLE book(bookid varchar(30),bookname varchar(30),department varchar(15))";
    $res = mysqli_query($conn, $qeury);
}
else{

    $bname=$_POST['bname'];
    $bid=$_POST['bid'];
    $bdept=$_POST['dpet'];
    //$qeury3 = "INSERT INTO marks(bookid,bookname,department) VALUES('$bname','$bid','$bdept')";
    $qeury3 = "INSERT INTO book(bookid,bookname,department) VALUES('$bname','$bid','$bdept')";
    $res=mysqli_query($conn,$qeury3);
    

}

#$qeury = "SELECT * FROM marks WHERE RegisterNumbers='$reg'";


?>