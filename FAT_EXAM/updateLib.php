<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lib | NAVEEN</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "webtachlab";
    $conn = new mysqli($servername, $user, $pass, $db) or die("Unnable to connect");

    $tbq = "SELECT * FROM book";
        $res = mysqli_query($conn, $tbq);

            while ($output2 = mysqli_fetch_array($res)) {

                echo "" . $output2['bookid'] ." | " .$output2['bookname']." | ".$output2['department']."<br>";
            }
            
     
            $conn=null;

    ?>
</body>

</html>