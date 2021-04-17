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

<body>
    <div class="marks">
        <h1>NAME -NAVEEN</h1>
    </div>


    <div class="updatemarks">
        <h1>ADD NEW RECORD</h1>
        <div class="NAVEEN">

            <table class="blue">
                <tbody id="TB">
                    <tr>
                        <td>ENTER REG NUMBER</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="reg"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="sem"></td>
                    </tr>
                    <tr>
                        <td>CAT NUMBER</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="catno"></td>
                    </tr>
                    <tr>
                        <td>Subject Code</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="subcode"></td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="marks"></td>
                    </tr>
                    <tr>
                        <td> <button type="button">ADD NEW RECORD AJAX</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let btn = document.getElementsByTagName('button')[0];

        btn.addEventListener('click', () => {
            let reg = document.getElementsByName('reg')[0].value;
            let sem = document.getElementsByName('sem')[0].value;
            let ctano = document.getElementsByName('catno')[0].value;
            let subcode = document.getElementsByName('subcode')[0].value;
            let marks = document.getElementsByName('marks')[0].value;
            console.log(reg)
            $.ajax({

                type: "GET",
                url: "add.php",
                data: {
                    RegisterNumbers: reg,
                    Semester: sem,
                    CATNo: ctano,
                    SubCode: subcode,
                    newmarks: marks
                },
                success: function(respone) {
                    alert("Done")
                }
            });


        });
    </script>
    <?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "webtachlab";
    $conn = new mysqli($servername, $user, $pass, $db) or die("Unnable to connect");
    ?>
    <?php


    if (isset($_GET['RegisterNumbers']) && isset($_GET['Semester']) && isset($_GET['CATNo']) && isset($_GET['SubCode']) && isset($_GET['newmarks'])) {
        $reg = $_GET['RegisterNumbers'];
        $sem = $_GET['Semester'];
        $catno = $_GET['CATNo'];
        $SubCode = $_GET['SubCode'];
        $newmarks = $_GET['newmarks'];
        $qeury3 = "INSERT INTO marks(RegisterNumbers,Semester,CATNo,SubCode,Mark) VALUES('$reg','$sem','$catno','$SubCode','$newmarks')";

        $res3 = mysqli_query($conn, $qeury3);
    }

    ?>

</body>


</html>