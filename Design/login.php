<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/my.css" rel="stylesheet" type="text/css"> 

        <style>
            td {
                padding: 10px;
            }
        </style>
    </head>
    <body> 

    <center>

        <div class="form-login"  >

            <table width="45%" >
             <form action="userLoginLogic.php" method="post">

                <tr><img src="img/logo.png" alt=""></tr>

                <tr>
                    <td>Email address <br></td>
                    <td>  <input type="text" id="username" name="username" class="form-control" required placeholder="Email address" ></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td> <input type="password" id="userpassword" name="userpassword" class="form-control" required  placeholder="Password" ></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in" id="click" /> </td>
                </tr>
                <tr>  <td> </td>
                    <td>Forget your Password?</td>

                </tr>
                <tr>  <td> </td>
                    <td> <a href="signup.php">Create Account</a></td>

                </tr>
            </table>
            </form>


        </div>


    </center>


</body>
</html>
