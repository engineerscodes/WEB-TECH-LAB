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
    <h1>BOOKS</h1>

    <div class="Top">
        <diV>
            <?php session_start()
            ?>

            <?php
            if(empty($_SESSION)){
                header('location:index.php');
            }else{
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
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>LORD OF THE RINGS </h3>
            <h2> price - $50</h2>
          

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>LORD OF THE RINGS </h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>LORD OF THE RINGS </h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>LORD OF THE RINGS </h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>LORD OF THE RINGS </h3>
            <h2> price - $50</h2>

        </div>
        <div>
            <img width="250px" height="250px" src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED">

            <h3>LORD OF THE RINGS </h3>
            <h2> price - $50</h2>

        </div>


    </div>
</body>

</html>