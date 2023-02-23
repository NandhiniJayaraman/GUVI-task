<!DOCTYPE html>
<html>
    <head>
        <title >Profile-Page</title>
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
                color: rgb(51, 21, 223);
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
        </style>
    </head>
    <body>
        <div class="login-form">
            <h1>Profile-Page</h1>
            <form action="#" method="post">

                <p>Name             :</p>
                <input type="text" name="Name" placeholder="Name"> 
                <p>Date of Birth    :</p>
                <input type="date" name="dob" placeholder="DOB"> 
                <p>Contact Number   :</p>
                <input type="number" name="number" placeholder="Number">
                <p>Age              :</p>
                <input type="number" name="age" placeholder="Age"> 
                <p>Gender           :</p>
                <label><input type="radio" name="gender" >Male</label>  <label><input type="radio" name="gender">Female</label>
                <br>
                <br>
                <button type="reset">Save</button><a href="regis.html"> .....Exit</a>
                

            </form>

        </div>

    </body>
</html>
        