<html>
    <head>
        <title>bootstrap datepicker examples</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap CSS and bootstrap datepicker CSS used for styling the demo pages-->
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="hero-unit">
                <input  type="text" placeholder="click to show datepicker"  id="example1">
            </div>
        </div>
        <!-- Load jQuery and bootstrap datepicker scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function() {

                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });

            });
        </script>
    </body>
</html>
