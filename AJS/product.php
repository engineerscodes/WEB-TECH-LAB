<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "Products";
    $conn = new mysqli($servername, $user, $pass, $db) or die("Unnable to connect");
?>
    


<?php
$qeury2 = "SELECT * FROM products";

$res2 = mysqli_query($conn, $qeury2);

$data = array();

while ($row = mysqli_fetch_array($res2)) {
    $data[] = array("pname" => $row['Name'], "pprice" => $row['Price'], "purl" => $row['Image_url'],"pinfo" =>$row['infomation']);
}
echo json_encode($data);

?>