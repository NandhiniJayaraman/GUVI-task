<!DOCTYPE html>
<html>
    <head>
        <title >Registration page</title>
        <style type="text/css">
            body{
                background-color: azure;
            }
            h1{
                color: rgb(228, 54, 23);
                font-size: 35px;
                font-family: sans-serif;
            }
            p{
                color: rgb(130, 11, 241);
                font-size: 20px;
                font-family: sans-serif;
            }
            input{
                color: black;
                font-size: 20px;
                font-family: sans-serif;
            }
            button{
                color: blueviolet;
                font-family: sans-serif;
                font-size: 20px;
            }
            a{
                font-size: 25px;
            }
        </style>
     </head>
    <body>
        <div class="registration-form">
            <h1>Registration Form</h1>
            <form action="con.php" method="post">
                <p>Full Name:</p>
                <input type="text" name="fullname"  id="fullname" placeholder="Full Name">
                <p>User Name:</p>
                <input type="text" name="username" id="username" placeholder="User Name">
                <p>Email:</p>
                <input type="email" name="email"   id="email" placeholder="Email">
                <p>Password</p>
                <input type="password" name="password" id="password" placeholder="Password">
                <br>
                <br>
                <button type="submit">Registration</button>
                <br>
                <p> You have an already account <a href="login1.html"> Login-page </a> </p>
                
            </form>


        </div>

    </body>
</html>
        