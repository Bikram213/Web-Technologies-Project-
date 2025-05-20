<?php
//validation
session_start();
if (isset($_POST['submit']))
{

    $userName =$_REQUEST['userName'];
    $password =$_REQUEST['password'];
    $role =$_REQUEST['radio'] ??"";

    if($userName =="" ||$password=="")
    {
        echo "Null data found";
    }
    
    else if(str_word_count($userName) <2)
    {
        echo"Enter full name";
    }

    if(strlen($password) < 8)
    {
        echo "Password must be at least 8 characters.";
    }

    $hasDigit = false;
    for ($i = 0; $i < strlen($password); $i++) 
    {
        if ($password[$i] >= '0' && $password[$i] <= '9') 
        {
            $hasDigit = true;
            break;
        }
    }
    if (!$hasDigit) 
    {
        echo "Password must contain at least one number.";
    }


    if ($role=="") 
    {
        echo "Please select a role (User or Admin).";
    }

    // if (roleUser) 
    // {
    //     window.location.href = "userDashboard.html";
    //             return false;
    //         } else if (roleAdmin) {
    //             window.location.href = "adminDashboard.html";
    //             return false;
    //         }


     

        // if ($role == "User") 
        // {
        //     header("Location: ../Views/userDashBoard.php");
        //     exit();
        // } 
        // 
     $_SESSION['status'] = true;
    header( 'location: ../Views/home.php');


    if ($role == "User") 
    {
        header("Location: ../Views/userDashBoard.php");
        exit();
    }

    else if ($role == "Admin") 
    {
         header("Location: adminDashboard.html");
        exit();
    }

    



    //validation done

}




?>