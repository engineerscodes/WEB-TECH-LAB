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
        width: 250px;
        height: 50px;
        background-color: cyan;
        color: white;
        font-size: 20px;
        margin: 30px 0;
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

    .inner{
        display: flex;
        flex-direction: column;
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
            <div class="inner">
               <img src="https://i.pinimg.com/564x/ff/4f/08/ff4f086803c8cb08385a371f1d39c8d2.jpg" alt="books" width="250px" height="250px">
               <button onclick="window.location.href='pro1.php';">BOOKS</a></button>
            </div>
        </div>

        <div>
                <div class="inner">
                    <img src="https://i.pinimg.com/originals/cc/9e/7f/cc9e7f0daf4721a00cb8a869bad2bbb4.jpg" alt="pen" width="250px" height="250px">
                    <button onclick="window.location.href='pro2.php';">PENS</button>
                </div>
        </div>
    </diV>
</body>


</html>