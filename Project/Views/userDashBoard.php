 <?php
    session_start();
    if(isset($_SESSION['status'])){
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> User Dashboard</title>
</head> 
<body>

        <div class="userDashboard">
		
        <button onclick="window.location.href='bookCatalog.html'">Book Catalog</button><br> <br>
        <button onclick="window.location.href='borrowAccounts.html'">Borrow or Return Book</button> <br><br>       
        <button onclick="window.location.href='checkInOut.html'">Check In/out</button><br><br>
        <button onclick="window.location.href='fineCalculation.html'">Fine</button>
        </div>

	

   

</body>
</html>

 <?php
    }else{
        header('location: home.php');
    }

?> 