<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIT AP</title>
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
    </style>
</head>

<body>
    <div class="NAVEEN">
        <table class="blue">
            <thead>
                <tr>
                    <th colspan="2"> VIT AP LOGIN SYSTEM </th>
                </tr>
            </thead>
            <tbody id="TB">
                <tr>
                    <td>REGISTER NUMBER</td>
                    <td> <input style="width: 80%;" type="text" name="reg" id="reg"> </td>
                </tr>
                <tr>
                    <td colspan="2" id="tds">
                        <button type="button" onclick="window.location.href='getmarks.php'"> GET MARKS</button>
                        <button type=" button" onclick="window.location.href='updatemarks.php'"> UPDATE MARKS</button>
                        <button type="button" onclick="window.location.href='delete.php'"> DELETE RECORD </button>
                        <button type="button" onclick="window.location.href='add.php'"> ADD New RECORD</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>