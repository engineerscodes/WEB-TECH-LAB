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

            align-items: center;
            justify-items: center;
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
    </style>
</head>

<body>
    <h1>PENS</h1>

    <div class="Top">
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
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>BALL PEN</h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>BALL PEN</h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>BALL PEN</h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>BALL PEN</h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="http://imshopping.rediff.com/imgshop/300-400/shopping/pixs/30944/i/img_20191128_113457._rny-3-in-1-ball-pen-with-mobile-stand-stylish-pen-3-pcs.jpg">

            <h3>BALL PEN</h3>
            <h2> price - $50</h2>

        </div>



    </div>
</body>

</html>