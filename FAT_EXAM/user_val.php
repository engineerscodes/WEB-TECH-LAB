<?php
  
  if(isset($_POST['submit']))
  {
    $ename=$_POST['uname'];
    $pass=$_POST['pass'];
    $emial=$_POST['email'];
    $phonum=$_POST['num'];

    if(preg_match('/^[A-Z]+[A-Za-z]+$/',$ename) ==0){
         echo " <script> alert('FISRT LETTER MUST BE CAPTITAL AND NO  NUMVER IS ALLOWED') </script>";
         header("Location: /FAT_EXAM/login.html");
    }

    if(strlen($pass)>8 ){
        if(preg_match('/[0-9]+/',$pass) ==1 && preg_match('/[A-Z]+/',$pass)==1 && preg_match('/[A-Za-z0-9]+/',$pass)){
             // echo " <script> alert('Password is Strong') </script>";
               
        }
        else{
              echo " <script> alert('Password must be >8 must have 1n and 1l 1and S') </script>";
            header("Location: /FAT_EXAM/login.html");
        }
    }
      if(preg_match('/^[1-9]+$/',$phonum)==0)
      {
      echo " <script> alert('Number cannot be Zero') </script>";
    header("Location: /FAT_EXAM/login.html");
      }
  
      if (preg_match('/^[a-z]+@{1}[a-z]+\.com$/', $emial) == 0) {
            echo " <script> alert('invalid email') </script>";
         header("Location: /FAT_EXAM/login.html");
      }

      echo "whlc";
      

  }

?>