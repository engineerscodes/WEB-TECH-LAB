<?php

session_start();


    
    $color= $_SESSION['color'];
    //print_r($_SESSION);
    $htmls="<div style='background-color:$color;'>";
    echo $htmls;

    for ($i =0;$i<10;$i++)
      {
         echo $_SESSION['number']*$i."<br>";
      }


      echo "</div>"
  
    

?>