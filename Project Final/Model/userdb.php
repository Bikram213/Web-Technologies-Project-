<?php
 //session_start();

function insertUser($name, $sId, $email, $password, $department, $role) 
{
    // Connect to the database
    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    
    $sql = "INSERT INTO user VALUES ('$name', '$sId', '$email', '$password', '$department', 'user')";
   // $result = mysqli_query($con, $sql);

    if(mysqli_query($con, $sql)){
        echo "success!";
        return true;
         }else{
        echo "DB error";
        return false;
         }
      
}
?>
