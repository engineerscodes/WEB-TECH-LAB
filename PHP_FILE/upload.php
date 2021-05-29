<?php


if (isset($_POST['submit'])) {

    $emp_file=$_FILES['emp_file'];
    
    $emp_file_name=$_FILES['emp_file']['name'];

    $emp_file_type = $_FILES['emp_file']['type'];

    $emp_file_error=$_FILES['emp_file']['error'];

    $emp_file_size=$_FILES['emp_file']['size'];

    $emp_file_temp_location= $_FILES['emp_file']['tmp_name'];

     
    $file_ext= explode('.', $emp_file_name);

    $filetype= strtolower(end($file_ext)) ;

    $not_alowed_type=array('mp4','mov','wmv','avi','mkv','avchd','flv','f4v','swf','webm','mpeg-2','zip','rar');

    

    if (in_array($filetype,$not_alowed_type)){
        echo "file type not allowed : ".$filetype;
    }else{

            if($emp_file_error === 0){
              
                if($emp_file_size< 1048576000){
                   
                    $emp_id=$_POST['emp_id'];
                    
                    $fileid=uniqid('',true);

                    $filename=$emp_id."_".$fileid.".".$filetype;
                    $fileFolder= "upload/".$filename;
                    move_uploaded_file($emp_file_temp_location,$fileFolder);
                    header("Location:index.php?uploadsucess");

                }else{
                    
                    echo "file type is too big  !!!!!!!";
                }


            }else{

                echo "The is a issue in file uploaded try again later !!!!";
            }
    }

}


?>