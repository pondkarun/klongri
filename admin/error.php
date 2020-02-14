<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="assets/image/logo-klongri.png" />
    <title>Error 404: Page not found</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">

</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include("includes/navbar.php"); ?>
    <!-- Sidebar menu-->
    <?php include("includes/sidebar.php"); ?>
    <main class="app-content">
        <div class="page-error tile">
            <h1><i class="fa fa-exclamation-circle"></i> Error 404: Page not found</h1>
            <p>The page you have requested is not found.</p>
            <p><a class="btn btn-primary" href="javascript:window.history.back();">Go Back</a></p>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="assets/js/plugins/pace.min.js"></script>

    <!-- Data table plugin-->
    <script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#DataTable').DataTable();
    </script>
    <script type="text/javascript">
        $(function() {
            $("#myform1").on("submit", function() {
                var form = $(this)[0];
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    </script>

</body>

</html>