<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get marks</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .NAVEEN {
            display: flex;
            justify-content: center;

        }

        table {
            border-collapse: collapse;
            width: 60%;
            text-transform: uppercase;
        }

        .blue {
            border: 2px solid #1ABC9C;
        }

        .blue thead {
            background: #1ABC9C;
        }

        .blue thead:hover {
            border: 2px solid #9B59B6;
            background: #9B59B6;
        }

        thead tr {
            height: 60px;
        }

        thead {
            color: white;
            padding: 10px 0;
        }

        th,
        td {
            text-align: center;
            padding: 5px 0;
        }

        tbody tr {
            height: 50px;
        }

        tbody tr:nth-child(even) {
            background: #ECF0F1;
        }

        tbody tr:hover {
            background: #BDC3C7;
            color: #FFFFFF;
        }

        #tds button {
            width: 150px;
            height: 50px;
            padding: 10px;
            margin: 10px;
            background-color: #9B59B6;
            color: white;
            font-weight: bold;
            border-radius: 5px;

        }

        #tds button:hover {
            background-color: #1ABC9C;
        }

        .marks {
            text-align: center;
            color: #1ABC9C;
        }
    </style>
</head>
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "webtachlab";
$conn = new mysqli($servername, $user, $pass, $db) or die("Unnable to connect");

$reg = $_POST['reg'];

$qeury = "SELECT * FROM marks WHERE RegisterNumbers='$reg'";
$res = mysqli_query($conn, $qeury);
?>

<body>
    <div class="marks">
        <h1><?php
         
            $qeury2 = "SELECT * FROM student_info WHERE RegisterNumber='$reg'";

            $res2 = mysqli_query($conn, $qeury2);
            while ($output2 = mysqli_fetch_array($res2)) {
        
                echo "".$output2['Name'];
            }

            ?>
        </h1>
    </div>
    <div class="NAVEEN">

        <table class="blue">
            <thead>
                <tr>
                    <th> REG NUMBER </th>
                    <th>Semester </th>
                    <th> CATNo </th>
                    <th> SubCode </th>
                    <th> Mark </th>
                </tr>
            </thead>
            <tbody id="TB">
                <?php

                while ($output = mysqli_fetch_array($res)) {
                    // echo "marks = " . $output['Mark'] . "<br>";

                    echo "<tr><td>" . $output['RegisterNumbers'] . "</td><td>" . $output['Semester'] . "</td><td>" . $output['CATNo'] . "</td><td>" . $output['SubCode'] . "</td><td>" . $output['Mark'] . "</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>


</html>