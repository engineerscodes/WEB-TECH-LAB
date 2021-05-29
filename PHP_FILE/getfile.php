<?php


if (isset($_POST['submit'])) {

    $file_location='upload/';

    $files=scandir($file_location);
    $files=array_values(array_diff($files,array('.','..')));
    
    $reg=$_POST['emp_id'];
    
    $flag=0;
    for ($x = 0; $x < count($files); $x++) 
    {
        //print_r($files[$x]);

        $file_regs=explode('_', $files[$x]);

         $file_regNumber= $file_regs[0];

         if ( $reg ===$file_regNumber ){

            printf($files[$x]);
            $file_path='upload/'. $files[$x];
            //echo file_get_contents($file_path);
            echo "<iframe src=\"$file_path\" width=\"100%\" style=\"height:100%\"></iframe>";
            $flag=$flag+1;

         }
         

    }
    if($flag === 0){
        echo "No file found plz upload one !!!!!";
    }

    //print_r($files);

}

?>
