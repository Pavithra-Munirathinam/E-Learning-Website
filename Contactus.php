<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>
        <style>
            body{
                background-image: url(https://img.freepik.com/free-vector/green-sand-paper_53876-86281.jpg?size=626&ext=jpg);
            }
            form{
                text-align: center;

            }
            button{
                font-size: 20px;
                color: red;
                text-align: center;
            }
            input{
                width: 200px;
                height: 50px;
            }
        </style>
    </head>
    <body>
        <h2 style="text-align: center;">Contact Us</h2>
        <form action="ctus.php" method="post">
            <input type="" id="name" name="name" placeholder="* Enter your Name"><br><br>
            <input type="text" id="mail" name="mail" placeholder="* Enter your Email ID"><br><br>
           <input type="text" id="msg" name="msg" placeholder="Type Your Message"><br><br>
            <input type="" id="number" name="number" placeholder="* Enter your Mobile No"><br><br>
            <button>Just One Click We will Contact You Soon</button>
        </form>
    </body>
</html>