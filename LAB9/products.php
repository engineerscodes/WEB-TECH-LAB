<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
</head>
<style>
    a {

        text-decoration: none;

    }

    a:visited {
        text-decoration: none;
    }

    button {
        width: 150px;
        height: 50px;
        background-color: cyan;
        color: white;
        font-size: 20px;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;

        background-color: #0d1117;
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

    .naveen {

        width: 100%;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .naveen div {
        margin: 50px;
    }
</style>

<body>
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
    <diV class="naveen">
        <div>
            <button onclick="window.location.href='pro1.php';">BOOKS</a></button>
        </div>

        <div>
            <button onclick="window.location.href='pro2.php';">PENS</button>
        </div>
    </diV>
</body>


</html>