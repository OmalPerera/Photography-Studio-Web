<?php  //Start the Session
    session_start();
    require('db.php');

     
    //If the form is submitted or not.
    //If the form is submitted

    if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phonenumber']) and isset($_POST['userpassword'])){
        //Assigning posted values to variables.
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $userpassword = $_POST['userpassword'];

        
        //Checking the values are existing in the database or not
        $query = "INSERT INTO sign_up (gmail, name, con_num, pasword) VALUES ('$email', '$username', '$phonenumber', '$userpassword')";
 

        if (mysqli_query($connection, $query)) {
            
                header("Location:login.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);

    }

?>