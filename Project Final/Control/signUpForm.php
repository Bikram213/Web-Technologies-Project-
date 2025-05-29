<?php
  session_start();
if(isset($_POST['submit']))
{

    // Collect form data
    $name = $_POST['name'];
    $sId = $_POST['sId'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $role = $_POST['radio'] ??"";

    // Handle file upload
    // $file = $_FILES['file']['name'];
    // $tmp = $_FILES['file']['tmp_name'];
    // $uploadPath = "../uploads/" . $file;

    require_once("../Model/userdb.php");

    $result = insertUser($name, $sId, $email, $password, $department, $role);

    if ($result) {
        echo "Signup successful!";
    } else {
        echo "Signup failed!";
    }
}
?>
