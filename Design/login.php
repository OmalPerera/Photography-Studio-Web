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

    </head>
    <body> 

    <div style="background-image: url('img/slide-one.jpg'); height: 800px; margin-top: -80px; background-position: center; background-color: rgba(0,0,0,0.8);">
    <div style="background-color: rgba(0,0,0,0.4); width:100%; height:100%"></div>
        </div>
        <div class="wrapper">
            <form class="form-signin" action="userLoginLogic.php" method="post">

                <h2 class="form-signin-heading">Please login</h2>
                <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                <input type="password" class="form-control" name="userpassword" placeholder="Password" required=""/>      
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" style=" background-color: #3c3c3c"; type="submit">Login</button>

                <br><br>
                <p><a href="signup.php">Create Account</a></p>
                <p><a href="index.php">Back to home</a></p>  
            
            </form>
        </div>







    <!--center>

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


    </center-->


</body>
</html>
