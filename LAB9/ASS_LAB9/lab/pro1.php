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
            margin-bottom: 50px;
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
    <h1>BOOKS</h1>


    <div class="Top">
       <diV> <button class="btn" onclick="window.location.href='products.php'"> HOME </button></div>
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
    <div>


    </div>
    <div class="books">

        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>The War of the Ring</h3>
            <h2> price - $10</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">


        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>The Fellowship of the RingS </h3>
            <h2> price - $30</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>The Journey To Mordor </h3>
            <h2> price - $40</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>The Two Towers</h3>
            <h2> price - $60</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3> The Return of the King </h3>
            <h2> price - $100</h2>
            <h3>ENTER QUANTITY</h3><input class="in" type="number" value="0" placeholder="0">

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>The Treason of Isengard</h3>
            <h2> price - $850</h2>
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
    price = [10, 30, 40, 60, 100, 850];
    books = ["The War of the Ring", "The Fellowship of the RingS", "The Journey To Mordor", "The Two Towers", "The Return of the King", "The Treason of Isengard"]
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
                    url: "pro1.php",
                    data: {
                        "info": quantiy_array,
                        "price_info": price,
                        "titles": books
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

$_SESSION['info'] = isset($_POST['info']) ? $_POST['info'] : '';
$_SESSION['price'] = isset($_POST['price_info']) ? $_POST['price_info'] : '';
$_SESSION['titles'] = isset($_POST['titles']) ? $_POST['titles'] : '';
?>

</html>