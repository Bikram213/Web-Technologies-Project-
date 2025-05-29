<?php
    session_start();
    if(isset($_SESSION['status'])){
?>


<!doctype html>
<html>
    <head>
        <title>Sign Up</title>
		<link rel="stylesheet" href="SignUpForm.css">
		 <script src="signUpForm.js"></script>


    </head>
    <body>
         <form method="post" action="../Control/signUpForm.php" onsubmit="return validate()">
		<div>
		<label> Name :</label>
		<input type="text" id="name" name="name"><br>

		<!-- <label>Last Name :</label>
		<input type="text" name="text"><br> -->

		<label>Student ID :</label>
		<input type="number" id="sId" name="sId"><br>

		<label>Email :</label>
		<input type="Email" id="email" name="email"><br>

		<label> Password :</label>
		<input type="Password" id="password" name="password"> <br>

		

		

		<label> Department :</label>
		<select id="department" name="department">
			<option value="">Select Department</option> 
			<option name="cse" value="cse">CSE</option>
			<option name="eee" value="eee">EEE</option>
			<option name="bba" value="bba">BBA</option>
		</select><br>

		<label>Image :</label>
		<input type="file" id="file" name="file"> <br>

		<label for="role">Role:</label>
		<input type="radio" name="radio" id="user">
		<label for="user">User</label>
		<input type="radio" name="radio" id="admin">
		<label for="admin">Admin</label>

	</div>

		<input id="btn" name="submit" type="submit">Save</>
		<p id="msg"></p>


	</form>

    </body>
</html>

<?php
    }else{
        header('location: home.php'); //home a ashar jonno login kore asha lagbe
    }

?>