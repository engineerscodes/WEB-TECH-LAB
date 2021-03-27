<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fruit Shop </title>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <main>
        <header>
            <!-- Logo -->
            <a href="./index.html" class="logo">Fruit Shop</a>

            <!-- Navigation -->
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>

            <!-- Search & Cart -->
            <div class="left-nav">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-cart-arrow-down"></i></a>
            </div>

            <input type="checkbox" id="check" />
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </header>

        <!-- User Input Section -->
        <form action="#" method="POST">
            <section class="user-input">
                <div class="user-amount">
                    <h1>Submit Your Amount:</h1>
                    <div class="amount">
                        <input id="userAmount" type="text" name="amount" />
                        <button onclick="submitAmount()" type="button">Submit</button>
                    </div>
                    <p>Your Amount Rs: <span id="amountEntered">0</span></p>
                </div>
            </section>

            <!-- Products Section -->
            <section class="products">
                <div class="product-item">
                    <div class="product-img">
                        <img src="./images/Apple.png" alt="apple" />
                    </div>

                    <div class="product-description">
                        <h2 class="product-name"><a href="#">Apple</a></h2>

                        <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>

                        <p id="applePrice">Rs: 10</p>
                        <div class="buttons">
                            <button class="btn-plus" type="button" onclick="addApple()">+</button>
                            <input type="text" id="apple" value="0" name="apple" />
                            <button class="btn-minus" type="button" onclick="removeApple()">-</button>

                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="product-img">
                        <img src="./images/Orange.png" alt="apple" />
                    </div>

                    <div class="product-description">
                        <h2 class="product-name"><a href="#">Orange</a></h2>

                        <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>

                        <p id="orangePrice">Rs: 20</p>
                        <div class="buttons">
                            <button class="btn-plus" type="button" onclick="addOrange()">+</button>
                            <input type="text" id="orange" value="0" name="orange" />
                            <button class="btn-minus" type="button" onclick="removeOrange()">-</button>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="product-img">
                        <img src="./images/Mango.png" alt="apple" />
                    </div>

                    <div class="product-description">
                        <h2 class="product-name"><a href="#">Mango</a></h2>

                        <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>

                        <p id="mangoPrice">Rs: 30</p>
                        <div class="buttons">
                            <button class="btn-plus" type="button" onclick="addmango()">+</button>
                            <input type="text" id="mango" value="0" name="mango" />
                            <button class="btn-minus" type="button" onclick="removemango()">-</button>
                        </div>
                    </div>
                </div>

            </section>
            <div class="amount-details"> <button type="submit">SUBMIT</button></div>

        </form>
        <div class="amount-details">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_useramount = $_POST['amount'];
                echo "THE BALANCE IN YOUR ACCOUNT $_useramount";
                $_noapple = $_POST['apple'];
                $_noOrange = $_POST['orange'];
                $_nomango = $_POST['mango'];
                echo "NO OF APPLE =$_noapple | NO OF ORANGE =$_noOrange | NO OF MANGO =$_nomango";
                $_total = 10 * (int)$_noapple + 20 * (int)$_noOrange + 30 * (int)$_nomango;
                echo "TOTAL SHOPPING =$_total";
                if($_useramount<$_total)
                {  $need=$_total-$_useramount;
                  echo "<br>UR BALANCE IS NOT SUFFICIENT and more MORE MONEY $need";
                }
                else{
                    $new_bal=$_useramount-$_total;
                    echo "<br>purchase SUCCESSFULL NEW BALACE =$new_bal";
                }
            }

            ?>
        </div>
    </main>
    <script>
        let apple = document.getElementById("apple");
        let no0fapple = 0;
        // Increasing Function
        function addApple() {
            no0fapple = no0fapple + 1;
            apple.value = no0fapple;

        }

        function removeApple() {
            if (no0fapple == 0) {
                alert("NUMBER OF APPLE CANNOT BE < ZERO");
            } else {
                no0fapple = no0fapple - 1;
                apple.value = no0fapple;
            }
        }

        let Orange = document.getElementById("orange");
        let no0fOrange = 0;
        // Increasing Function
        function addOrange() {
            no0fOrange = no0fOrange + 1;
            Orange.value = no0fOrange;

        }

        function removeOrange() {
            if (no0fOrange == 0) {
                alert("NUMBER OF APPLE CANNOT BE < ZERO");
            } else {
                no0fOrange = no0fOrange - 1;
                Orange.value = no0fOrange;
            }
        }


        let mango = document.getElementById("mango");
        let no0fmango = 0;
        // Increasing Function
        function addmango() {
            no0fmango = no0fmango + 1;
            mango.value = no0fmango;

        }

        function removemango() {
            if (no0fmango == 0) {
                alert("NUMBER OF APPLE CANNOT BE < ZERO");
            } else {
                no0fmango = no0fmango - 1;
                mango.value = no0fmango;
            }
        }

        let userEnteredAmount;
        let total;

        // Checks User Input Amount
        function submitAmount() {
            userEnteredAmount = document.getElementById("userAmount").value;
            if (userEnteredAmount === "") {
                alert("Plz Submit Your Amount 1st !!");
                return false;
            } else {
                document.getElementById("amountEntered").innerText = userEnteredAmount;

                return true;
            }
        }
    </script>

    <!-- JS File -->

</body>

</html>