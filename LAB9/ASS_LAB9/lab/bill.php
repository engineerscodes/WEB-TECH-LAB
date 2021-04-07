<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    table {
        border-collapse: collapse;
        width: 100%;
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


    thead {
        color: white;

    }

    th,
    td {
        text-align: center;
        padding: 5px 0;
    }

    th {
        height: 50px;
    }

    tbody tr:nth-child(even) {
        background: #ECF0F1;
    }

    tbody tr:hover {
        background: #BDC3C7;
        color: #FFFFFF;
    }

    table {
        margin-bottom: 50px;
    }

    .timepass {
        display: flex;
        justify-content: center;
    }

    .timepass button {
        width: 150px;
        font-size: 32px;
        height: 50px;
        background: #9B59B6;
        color: wheat;
    }
</style>



<?php session_start();
?>
<?php
if (empty($_SESSION)) {
    header('location:index.php');
}
?>

<body>
    <div>


        <table class="blue">
            <thead>
                <tr>
                    <th> PRODUCT NAME </th>
                    <th>PRICE </th>
                    <td>QUANTITY</td>
                    <td> SUM</td>
                </tr>
            </thead>
            <tbody id="TB">

                <?php
                $totalprice = 0;

                if (!empty($_SESSION['info']) && !empty($_SESSION['price']) && !empty($_SESSION['titles'])) {
                    $array = $_SESSION['info'];
                    $array2 = $_SESSION['price'];
                    $bookname = $_SESSION['titles'];
                    for ($x = 0; $x < count($array); $x++) {
                        if ($array[$x] != 0) {
                            $p_sum = ($array2[$x] * $array[$x]);
                            echo "<tr> <td>$bookname[$x] </td> <td>$array2[$x]</td> <td>$array[$x]</td> <td>  $p_sum </td> </tr>";
                        }
                        $totalprice = $totalprice + ($array2[$x] * $array[$x]);
                    }
                }
            

                if (!empty($_SESSION['info_pen']) && !empty($_SESSION['price_pen']) && !empty($_SESSION['penname'])) {
                    $pen = $_SESSION['info_pen'];
                    $pen_price = $_SESSION['price_pen'];
                    $pen_name = $_SESSION['penname'];
                    for ($x = 0; $x < count($pen); $x++) {
                        if ($pen[$x] != 0) {
                            $l_sum = ($pen[$x] * $pen_price[$x]);
                            echo "<tr> <td>$pen_name[$x] </td> <td>$pen_price[$x]</td> <td>$pen[$x]</td> <td> $l_sum</td> </tr>";
                        }
                        $totalprice = $totalprice + ($pen[$x] * $pen_price[$x]);
                    }
                }
                ?>

            </tbody>
        </table>

        <div style="text-align: center;">
            <h1><?php echo "TOTAL PRICE $totalprice"; ?></h1>
        </div>
        <div class="timepass">
            <button onclick="window.print();return false;"> PRINT </button>
        </div>

    </div>
</body>
</body>

</html>