 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../public/stylesheet/my.css" media="all" rel="stylesheet" type="text/css">
        <link href="../public/stylesheet/bootstrap.css" rel="stylesheet" type="text/css"> 
        <script src="../jquery/jquery-1.11.3.min.js" type="text/javascript" ></script>

        <?php
        if ($_SESSION == NULL) {
            session_start();
        }
        ?>   

    </head>
    <body>



        <div class="main_header">

            <h1> Header    </h1> 

            <input type="submit" value="logout" name="signout" onclick=""  /> 

            <?php
            $uname = $_SESSION["uname"];
            $_priv = $_SESSION["privi"];
            echo $uname . "    " . $_priv;
            ?> 

            <?php
            if ($_priv == '1') {
                
            } else if ($_priv == '2') {
                
            } else if ($_priv == '3') {
                ?> 

                <a href="packages.php"><input type="submit" value="package" name="" /> </a>  

                <input type="submit" value="Detaisl" name=""  /> 

                <input type="submit" value="Payment" name=""  /> 

                <?php
            }
            ?>

        </div>        
