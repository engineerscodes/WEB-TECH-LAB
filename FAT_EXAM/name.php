<?php


//echo file_get_contents("C:\\xampp\\htdocs\\FAT_EXAM\\names.txt");

$myfile = fopen("names.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("names.txt"));



$Mfile=fopen("Mname.txt",'w');
$Nfile=fopen("Nname.txt",'w');

while (!feof($myfile)) {
    //echo fgets($myfile) . "<br>";
    //fwrite($Mfile, fgets($myfile));
    //fwrite($Nfile, fgets($myfile));
    $names= fgets($myfile);
    
    if($names[0]=='N' || $names[0]=='n'){
      //  echo $names."||||||||||||||N";
        fwrite($Nfile, $names);
    }

    if ($names[0] == 'M' || $names[0] == 'm') {
      //  echo $names;
        fwrite($Mfile, $names);
    }

}
fclose($Mfile);
fclose($Nfile);
fclose($myfile);
 

?>