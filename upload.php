<?php
$target_path  = "./image/";//接收文件目录  
$target_path = $target_path . basename( $_FILES['file']['name']);  
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
   echo "The file ".  basename( $_FILES['file']['name']). " has been uploaded";  
}  else{  
   echo "There was an error uploading the file, please try again!" . $_FILES['file']['error'];  
}   
?>