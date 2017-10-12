<?php
session_start();
include './header.php';
?>

<body>

    <div class="container pay" style="margin-top:-20px">
        <div class="row col-md-6" style="margin-bottom:10px"><h3> Package Details</h3></div>

        <br>
        <br>
        <br>
        <br>

        <div class="row " >
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row" >
                    <div class="col-lg-4 col-md-4">Photography </div>
                    <div class="col-lg-5 col-md-5">xxxx</div>
                </div>

                <div class="row" >
                    <div class="col-lg-4 col-md-4">Videography </div>
                    <div class="col-lg-5 col-md-5">xxxx</div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4">Pre Shoot </div>
                    <div class="col-lg-5 col-md-5">xxxx</div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4">Transport Expenses </div>
                    <div class="col-lg-5 col-md-5">xxxx</div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4"> Total</div>
                    <div class="col-lg-5 col-md-5">xxxx</div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4"> Paid</div>
                    <div class="col-lg-5 col-md-5">xxxx</div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4">Payable Amount</div>
                    <div class="col-lg-5 col-md-5">xxxx</div>
                </div>

                <div class="row"></div>

                <div class="row"></div>
            </div>




            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row payment_field">
                    <div class="col-lg-4 col-md-4">Name</div>
                    <div class="col-lg-5 col-md-5"><input type="text"  name="email" class="form-control" required  placeholder="Name" ></div>
                </div>

                <div class="row payment_field">
                    <div class="col-lg-4 col-md-4">Email</div>
                    <div class="col-lg-5 col-md-5"><input type="text"  name="email" class="form-control" required  placeholder="email" ></div>
                </div>

                <div class="row payment_field">
                    <div class="col-lg-4 col-md-4">Contact Number</div>
                    <div class="col-lg-5 col-md-5"><input type="text"  name="email" class="form-control"  placeholder="Contact Number" ></div>
                </div>

                <div class="row payment_field">
                    <div class="col-lg-4 col-md-4">Wedding Date</div>
                    <div class="col-lg-5 col-md-5"><input type="text"  name="email" class="form-control"  placeholder="Wedding Date" ></div>
                </div>

                <div class="row payment_field">
                    <div class="col-lg-4 col-md-4">Home Coming Date</div>
                    <div class="col-lg-5 col-md-5"><input type="text"  name="email" class="form-control" placeholder="Home Coming Date"  ></div>
                </div>

                <div class="row payment_field">
                    <div class="col-lg-4 col-md-4">Pay Date</div>
                    <div class="col-lg-5 col-md-5"><input type="text"  name="email" class="form-control"  placeholder="Pay Date" ></div>
                </div>

                <div class="row payment_field">
                    <div class="col-lg-4 col-md-4">Pay Amount</div>
                    <div class="col-lg-5 col-md-5"><input type="text"  name="email" class="form-control" placeholder="Pay Amount"   ></div>
                </div>

                <div class="row" payment_field>
                    <div class="col-lg-9 col-md-9"> <br><br>  <input class="btn btn-md btn-primary btn-block" type="submit" value="Pay" style=" background-color: #3c3c3c;"  /> </div>
                </div>

                <div class="row"></div>
            </div>
        </div>

    </div>

</body>
<?php
include './footer.php';
?> 