<?php
session_start();
include './header.php';
?>

<body>
    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function() {

            $('#example1').datepicker({
                format: "dd/mm/yyyy"
            });
        });
    </script>
<?php


$_SESSION['cus_id']=$_SESSION['name'];

if(isset($_POST['submit']))
{
    include_once('db.php');

    $email=$_SESSION['name'];

        $sql = "INSERT INTO cus_details (cus_id,wed_date, hom_date , name_groom, adres, name_bride, b_con_num, fix_line, reg_time, poru_s_time, end_time, fun_start_time, pre_sht_date)
        VALUES ('".$_SESSION['cus_id']."','".$_POST['w_date']."','".$_POST['h_date']."','".$_POST['name_groom']."','".$_POST['adres']."','".$_POST['name_bride']."','".$_POST['b_con_num']."','".$_POST['fix_line']."','".$_POST['reg_time']."','".$_POST['poru_s_time']."','".$_POST['end_time']."','".$_POST['fun_start_time']."','".$_POST['pre_sht_date']."')";
                    
        if ($connection->query($sql) === TRUE)
        {
            echo "<div class='alert alert-success' role='alert'>Well done! You have successfully requested</div>";
            //$errors="You have successfully registered";
            //           echo $errors;
            // the message
            $msg = "Please complete your registration";
                            
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);
            $header = 'From: info@quiz.com>' . "\r\n";
            // send email
            mail("'".$email."'","Start with us",$msg,$header);
        } else
        {
                        $errors="Something went wrong";
                        echo $errors;
                        //$errors="Error: " . $sql . "<br>" . $conn->error;
        }
}
?>


    <div class="container details" style="margin-top:-40px">

    <div class="row col-lg-12 col-md-12" style="margin-bottom:30px"><h3>Reserve a day for your Wedding</h3></div>
    <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
        <div class="row deta-mar">

            <div class="col-md-2">Wedding Date </div>
            <div class="col-md-3"> 

                <div class="input-group date" data-provide="datepicker">

                    <input  type="date" class="form-control" placeholder="click to show datepicker"  id="example1" name="w_date"/> 

                </div>

            </div>
            <div class="col-md-1"> </div>

            <div class="col-md-2">Registration Time</div>
            <div class="col-md-3">  <input  type="time" class="form-control" placeholder="Time" name="reg_time" > </div>

        </div>

        <div class="row deta-mar">

            <div class="col-md-2">Home Coming Date </div>
            <div class="col-md-3">   
                <div class="input-group date" data-provide="datepicker">

                    <input  type="date" class="form-control" placeholder="click to show datepicker"  id="example1" name="h_date" /> 

                </div> </div>
            <div class="col-md-1"> </div>

            <div class="col-md-2">Poruwe Ceremony/Church Time </div>
            <div class="col-md-3"> <input  type="time" class="form-control" placeholder="Time" name="poru_s_time" >   </div>

        </div>


        <div class="row deta-mar">

            <div class="col-md-2">Name Of the Groom </div>
            <div class="col-md-3">  <input  type="text" class="form-control" placeholder="Name"  name="name_groom" >    </div>
            <div class="col-md-1"> </div>

        </div>

        <div class="row deta-mar">

            <div class="col-md-2">Address</div>
            <div class="col-md-3">  <input  type="text" class="form-control" placeholder="Address" name="adres"  >    </div>
            <div class="col-md-1"> </div>

            <div class="col-md-2">Departure (End time)  </div>
            <div class="col-md-3"> <input  type="time" class="form-control" placeholder="End time" name="end_time"  >   </div>

        </div>



        <div class="row deta-mar">

            <div class="col-md-2">Name Of the Bride</div>
            <div class="col-md-3">  <input  type="text" class="form-control" placeholder="Name"  name="name_bride">    </div>
            <div class="col-md-1"> </div>

            <div class="col-md-2">Funtion Start Time   </div>
            <div class="col-md-3">  <input  type="time" class="form-control" placeholder="Time"  name="fun_start_time">  </div>

        </div>
        <div class="row deta-mar">

            <div class="col-md-2">Contact Number</div>
            <div class="col-md-3">  <input  type="tel" class="form-control" placeholder="Contact Number" name="b_con_num" >    </div>
            <div class="col-md-1"> </div>

            <div class="col-md-2">Pre Shoot Date   </div>
            <div class="col-md-3">  <input  type="date" class="form-control" placeholder="Date" name="pre_sht_date" >  </div>
        </div>

        <div class="row deta-mar">
            <div class="col-md-2">Fixed Line</div>
            <div class="col-md-3">  <input  type="tel" class="form-control" placeholder="Contact Number"  name="fix_line">    </div>
            <div class="col-md-1"> </div>

            <div class="col-md-2">  </div>
            <div class="col-md-3"> <br><br>  <input class="btn btn-md btn-primary btn-block" style=" background-color: #3c3c3c;" type="submit" value="Save Changes" name="submit"/> </div>

        </div>

    </form>
    </div>



</body>
<?php
include './footer.php';
?> 