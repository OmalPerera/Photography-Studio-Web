<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/my.css" rel="stylesheet" type="text/css"> 

        <!--style>
            td {
                padding: 10px;
            }
        </style-->
    </head>
    <body>
    <div style="height:0px"></div>
    <div class="container">
        

        <div class="row">


        <div class="col-lg-4"></div>
        <form role="form" action="RegistrationLogic.php" method="post">
            <div class="col-lg-4">

                <div class="form-title-row col-lg-6>" style="padding-top:30px; padding-bottom:20px">
                    <h1>Create an account</h1>
                </div>
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="Name">Your Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="name" placeholder="Enter your Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email address">Phone number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Mobile number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Mobile Number">Your Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="userpassword" name="userpassword" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary pull-right">
            </div>
        </form>
        <div class="col-lg-4"></div>
        
    </div>
</div>

    </body>
</html>
