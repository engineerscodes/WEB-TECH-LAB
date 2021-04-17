<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .updatemarks table {
            width: 300px;
        }

        .updatemarks {
            text-align: center;
            margin: 25px 0;
            text-transform: uppercase;
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

                echo "" . $output2['Name'];
            }

            ?></h1>
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
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody id="TB">

                <?php

                while ($output = mysqli_fetch_array($res)) {
                    // echo "marks = " . $output['Mark'] . "<br>";
                    echo "<form method='POST' id='updateform' ></form>";
                    echo "<tr><td>" . $output['RegisterNumbers'] . "</td><td>" . $output['Semester'] . "</td><td>" . $output['CATNo'] . "</td><td>" . $output['SubCode'] . "</td><td>" . $output['Mark'] . "</td> <td> <button> Delete Record</button> </td> </tr>";
                }

                ?>


            </tbody>
        </table>
    </div>

    <div class="updatemarks">
        <h1>DELETE RECORDS AJAX</h1>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let allmarks = document.getElementsByTagName('button');
        let tab = document.getElementsByClassName('blue')[0];
        for (let i = 0; i < allmarks.length; i++) {
            allmarks[i].addEventListener('click', () => {
                //console.log(firstrow4)
                let firstrow1 = tab.rows[i + 1].cells[0].innerHTML;
                let firstrow2 = tab.rows[i + 1].cells[1].innerHTML;
                let firstrow3 = tab.rows[i + 1].cells[2].innerHTML;
                let firstrow4 = tab.rows[i + 1].cells[3].innerHTML;
                tab.rows[i + 1].outerHTML=""
                $.ajax({

                    type: "GET",
                    url: "delete.php",
                    data: {
                        RegisterNumbers: firstrow1,
                        Semester: firstrow2,
                        CATNo: firstrow3,
                        SubCode: firstrow4,
                    },
                    success: function(respone) {
                        alert("Done")
                    }
                });
            });
        }
    </script>
    <?php


    if (isset($_GET['RegisterNumbers']) && isset($_GET['Semester']) && isset($_GET['CATNo']) && isset($_GET['SubCode'])) {
        $reg2 = $_GET['RegisterNumbers'];
        $sem2 = $_GET['Semester'];
        $catno2 = $_GET['CATNo'];
        $SubCode2 = $_GET['SubCode'];
        $qeury4 = "DELETE FROM marks  WHERE (RegisterNumbers='$reg2' AND Semester='$sem2' AND CATNo ='$catno2' AND SubCode='$SubCode2')";

        $res4 = mysqli_query($conn, $qeury4);
    }

    ?>


</body>

</html>