<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login 19BCN7185</title>
</head>
<style>
    .FORMS {
        display: flex;
        flex-direction: row;
        justify-items: center;
        align-items: center;
        text-align: center;
        font-size: 32px;

    }

    input {
        width: 250px;
        font-size: 32px;
        margin: 25px;
    }

    button {
        width: 250px;
        font-size: 32px;
        margin: 25px;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        color: white;

        background-color: #0d1117;
    }

    .CON {
        display: flex;
        width: 100%;
        height: 90vh;
        justify-content: center;
        align-items: center;

    }
</style>

<body>
    <div class="CON">
        <div class="Container">
            <?php
            session_start();
            ?>

            <?php


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (empty($_POST["ename"])) {

                    echo " <script> alert('NAME CANNOT BE EMPTY') </script> ";
                }


                if (strlen($_POST["Password"]) <= 3) {
                    echo ("  <script> alert('PASSWORD MUST BE GREATER THAN 8') </script>");
                }


                $user_password = array("19BCD2745" => "aa35", "19bcn7185" => "nave", "19BCD2747" => "cc43");

                foreach ($user_password as $i => $i_value) {
                    if ($_POST["ename"] == $i) {
                        if ($_POST["Password"] == $i_value) {

                            $_SESSION['name'] = $_POST["ename"];
                            $_SESSION['password'] = $_POST["Password"];

                            echo ("  <script> alert('LOGIN SUCCEESFULL') </script>");
                            header('location:products.php');
                        }
                    }
                }
                echo ("  <script> alert('LOGIN FAILED ') </script>");
            }

            ?>



            <div class="FORMS">

                <form method="POST">
                    <div>
                        <label for="emailname"> REG NUMBER </label>
                    </div>

                    <div>
                        <input type="text" id="emailname" name="ename">
                    </div>

                    <div>
                        <label for="Password"> Password </label>
                    </div>

                    <div>
                        <input type="password" id="Password" name="Password">
                    </div>
                    <button type="submit">SUMBIT </button>
                    <button type="reset" id="RESET"> ReSET</button>
                </form>

            </div>


        </div>

    </div>
</body>

</html>