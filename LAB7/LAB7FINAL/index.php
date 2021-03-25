<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="styles.css">
</head>

<body>
     <div class="Container">
           <?php
            session_start();
           ?>
              
               <?php



               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (empty($_POST["ename"])) {
                        
                         echo " <script> alert('NAME CANNOT BE EMPTY') </script> ";
                           
                    }
                    if (!empty($_POST["ename"])) {


                         if (!filter_var($_POST["ename"], FILTER_VALIDATE_EMAIL)) {
                              echo " <script> alert('INVALID EMAIL ADDRESS') </script> ";
                         }
                    }


                    if (strlen($_POST["Password"]) < 8) {
                         echo ("  <script> alert('PASSWORD MUST BE GREATER THAN 8') </script>");
                    }

                    if (strlen($_POST['Cnumber']) != 10) 
                    {    
                         echo ("  <script> alert('NUMBER MUST BE LENGTH OF 10 and NUMBERIC ONLY') </script>");
                    }


                    $user_data = file_get_contents('./user.json');
                    $json_user_data = json_decode($user_data, true);
                    //print_r($json_user_data);
                    $flag = -1;
                    foreach ($json_user_data['creditial'] as $key => $value) {
                         // echo $value["user"] . ", " . $value["pass"] . "<br>";
                         if ($value["user"] == $_POST["ename"] && $value["pass"] == $_POST["Password"]) 
                         {
                              $_SESSION['user'] = $_POST["ename"];
                              $_SESSION['NUMBER'] = $_POST['Cnumber'];
                              $_SESSION['NAME']=$value["name"];
                              echo ("  <script> alert('LOGIN SUCCEESFULL') </script>");

                              header('location:homePage.php');
                              $flag = 1;
                         }
                    }
                    
                              

                    

                    if ($flag == -1)
                         echo ("  <script> alert('INVALID USERNAME OR PASSWORD PLZ CHECK') </script>");

                    //print_r($json_user_data['creditial'][0]['user']);




               }

               ?>
         


          <div class="FORMS">

               <form method="POST" action="#">
                    <div>
                         <label for="emailname"> EAMIL </label>
                    </div>

                    <div>
                         <input type="email" id="emailname" name="ename">
                    </div>

                    <div>
                         <label for="Password"> Password </label>
                    </div>

                    <div>
                         <input type="password" id="Password" name="Password">
                    </div>

                    <div>
                         <label for="num"> NUMBER </label>
                    </div>

                    <div>
                         <input type="number" minlength="10" maxlength="10" id="num" name="Cnumber">
                    </div>

                    <button type="submit">SUMBIT </button>
                    <button type="reset" id="RESET"> ReSET</button>
               </form>

          </div>


     </div>
</body>

</html>