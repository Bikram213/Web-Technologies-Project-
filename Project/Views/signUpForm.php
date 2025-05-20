<!doctype html>
<html>
    <head>
        <title>Sign Up</title>
		<link rel="stylesheet" href="SignUpForm.css">
		 <script src="signUpForm.js"></script>


    </head>
    <body>
        <form onsubmit="return validate()">
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
			<option value="cse">CSE</option>
			<option value="eee">EEE</option>
			<option value="bba">BBA</option>
		</select><br>

		<label>Image :</label>
		<input type="file" id="file" name="file"> <br>

		<label for="role">Role:</label>
		<input type="radio" name="radio" id="user">
		<label for="user">User</label>
		<input type="radio" name="radio" id="admin">
		<label for="admin">Admin</label>

	</div>

		<button id="btn" type="submit">Save</button>
		<p id="msg"></p>


	</form>

    </body>
</html>