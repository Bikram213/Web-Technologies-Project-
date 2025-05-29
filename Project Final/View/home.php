<?php
session_start();
$_SESSION['status'] = true;
//$_SESSION['from_home']=true;
?>

<!DOCTYPE html>
<html>
    <head>
    <title> Home Page</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="container">
    <h1>📚 Welcome to the Library Management System</h1>
    <p>Manage your books, members, and borrowing with ease.</p>
    <a href="login.php"><button>Login to Continue</button></a>

    <!-- <button onclick="window.location.href='userLogin.php'">Login to Continue</button> -->
  </div>
</body>

</html>

