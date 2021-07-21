<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <style>
            label{
                text-align: center;
                color:black;
            }
            body{
                background-color:darksalmon;

            }
        </style>
    </head>
    <body>
        <div class="container"></div>
        <form  action="backendofreg.php" method="post">
            <h2 style="text-align:left;">Sign Up</h2>
            <label for="fname"><b>First Name:</b></label>
            <input type="text" id="fname" name="fname"><br><br><br>
            <label for="lname"><b>Last Name:</b></label>
            <input type="text" id="lname" name="lname"><br><br><br>
            <label for="email"><b>Email Id: </b> </label>
            <input type="text" id="email" name="email" ><br><br><br>
            <label for="pass"><b>Password:  </b> </label>
            <input type="password" id="pass" name="pass"><br><br>
            <label for="cpass"><b>Confirm Password:  </b> </label>
            <input type="password" id="cpass" name="cpass"><br><br>
            <button style="text-align: center;",name="sign_up">Sign Up</button>
            <p>Have an Account?<button style="text-align: center;"><a href="Login.php">Login</a></button></p>
        </form>
        </div>
       
    </body>
</html>