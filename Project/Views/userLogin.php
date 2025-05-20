<!doctype html>
<html>
    <head>
        <title>Sign Up</title>
          <link rel="stylesheet" href="userLogin.css">
           <script src="userLogin.js"></script> 

    </head>
    <body>
         <form method="post" action="../Controller/userLogin.php" onsubmit="return validate()">
        <fieldset>
         <h1>Login / SignUp</h1>

        <div id="login">
            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div id="button">
            <label for="role">Role:</label>
            <input type="radio" name="radio" id="user" value="User">
            <label for="user">User</label>
            <input type="radio" name="radio" id="admin" value="Admin">
            <label for="admin">Admin</label>

            <br>

            <button type="submit" id="login" name="login">Login</button>
            <button type="button" id="signUp" name="signUp" onclick="window.location.href='signUpForm.php'">Sign Up</button>
        </div>

        <p id="msg"></p>
        </fieldset>
    </form>

    

    </body>
</html>