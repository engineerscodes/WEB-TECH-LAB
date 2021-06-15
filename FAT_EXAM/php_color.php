<?php

session_start();

  if(isset($_POST['submit'])){
     
    $_SESSION['color']=$_POST['color'];
    $_SESSION['number']=$_POST['number'];
    
    $color= $_SESSION['color'];
    //print_r($_SESSION);
    $htmls=` <div style="background-color:$color;">`;
    for ($i =0;$i<10;$i++)
      {
         echo $_SESSION['number']*$i;
      }
  }

if (isset($_GET['submit'])) {

    $_SESSION['color'] = $_GET['color'];
    $_SESSION['number'] = $_GET['number'];
    $color = $_SESSION['color'];
    //print_r($_SESSION);
    $tb="<div style='background-color:$color;'>";
    echo $tb;
    for ($i = 1; $i <= 10; $i++) {
         echo $_SESSION['number'] * $i.'<br>';
    }
  

    echo "</div>";
}

?>