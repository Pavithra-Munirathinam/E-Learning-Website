<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
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
        <form action="backendoflogin.php" method="post">
            <h2 style="text-align:left;">Login</h2>
            <label for="email"><b>Email Id: </b> </label>
            <input type="text" id="email" name="email" ><br><br><br>
            <label for="pass"><b>Password:  </b> </label>
            <input type="password" id="pass" name="pass"><br><br>
            <button style="text-align: center;" name="login">Login</button>
            

        </form>
        </div>
       
    </body>
</html>