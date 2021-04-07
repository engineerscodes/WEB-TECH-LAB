<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKS</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: white;

            background-color: #0d1117;
        }

        h1,
        h2 {
            text-align: center;
            padding: 10px;
        }

        .books {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-row-gap: 25px;
            align-items: center;
            justify-items: center;
            margin-bottom: 50px;
        }


        .Top {
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 70px;
            justify-content: flex-end;


        }

        .Top div {
            margin: 10px;
            color: red;
            height: 30px;
        }

        button {
            width: 150px;
            height: 50px;
            background-color: cyan;
            color: white;
            font-size: 20px;
        }


        .timepass {
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }

        .timepass button {
            width: 150px;
            font-size: 32px;
            height: 50px;
            background: #9B59B6;
            color: wheat;
        }

        .btn {
            width: 150px;
            font-size: 32px;
            height: 50px;
            background: #9B59B6;
            color: wheat;
        }
    </style>
</head>

<body>
    <h1>PENS</h1>




    <div class="Top">
        <button class="btn" onclick="window.location.href='products.php'"> HOME </button>
        <diV>
            <?php session_start()
            ?>

            <?php
            if (empty($_SESSION)) {
                header('location:index.php');
            } else {
                $cur_UserName = $_SESSION['name'];
                echo "Logged in  AS   $cur_UserName";
            }
            ?>
        </diV>

        <div>
            <button onclick="window.location.href='Logout.php';">Logout</a></button>
        </div>
    </div>
    <div class="books">

        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>BALL PEN</h3>
            <h2> price - $5</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>PARKER</h3>
            <h2> price - $1</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>CROSS</h3>
            <h2> price - $4</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>MONTBLANC</h3>
            <h2> price - $10</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">
        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3> WATERMAN </h3>
            <h2> price - $8</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>SHANGHAI HERO</h3>
            <h2> price - $500</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>



    </div>
    <div class="timepass">
        <button onclick="window.location.href='bill.php'"> PRINT </button>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    let inputdate = document.getElementsByClassName('in');
    console.log(inputdate)
    price = [5, 1, 4, 10, 8, 500];
    penname = ["BALL PEN", "PARKER", "CROSS", "MONTBLANC", " WATERMAN", "SHANGHAI HERO"];
    quantiy_array = Array(6).fill(0)
    for (let i = 0; i < inputdate.length; i++) {
        inputdate[i].addEventListener('change', () => {
            if (inputdate[i].value < 0) {
                inputdate[i].value = 0;
                alert("QUANTITY CANNOT BE NEGATIVE");
                quantiy_array[i] = inputdate[i].value;
            } else {
                quantiy_array[i] = inputdate[i].value;
                console.log(quantiy_array)

                $.ajax({
                    type: "POST",
                    url: "pro2.php",
                    data: {
                        "info_pen": quantiy_array,
                        "price_info_pen": price,
                        "penname": penname
                    },
                    dataType: 'JSON',
                    success: function(resultData) {
                        console.log("POSTED DATA")
                    }

                });

            }
        })
    }
</script>
<?php

$_SESSION['info_pen'] = isset($_POST['info_pen']) ? $_POST['info_pen'] : '';
$_SESSION['price_pen'] = isset($_POST['price_info_pen']) ? $_POST['price_info_pen'] : '';
$_SESSION['penname'] = isset($_POST['penname']) ? $_POST['penname'] : '';
?>


</html>