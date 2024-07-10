<html>
<head>
    <meta charset="UTF-8">
    <title>Barangay E-service System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>

</head>
<body>
<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img alt="Brand" src="../img/poblacionlogo.png" style="width:50px; margin-top:-15px; "></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="javascript:void(0)" onclick="redirectLogin()">Sign In</a></li>
        
        <script>
        function redirectLogin() {
            var currentUrl = window.location.href;
        
            if (currentUrl.includes("pages/resident")) {
                window.location.href = "../pages/resident/login.php";
            } else if (currentUrl.includes("pages/zone")) {
                window.location.href = "../pages/zone/login.php";
            } else {
                window.location.href = "../login.php";
            }
        }
        </script>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper row-offcanvas row-offcanvas-left">


<div class="breadcrumb justify-content-center text-center" style="background-color: #3c8dbc; color: white;">  
    <h3><b><i class="fa fa-info-circle" aria-hidden="true"></i> About the System</b></h3>
      <h4>The capstone project, entitled “𝘉𝘢𝘳𝘢𝘯𝘨𝘢𝘺 𝘌-𝘴𝘦𝘳𝘷𝘪𝘤𝘦 𝘚𝘺𝘴𝘵𝘦𝘮” is a system purposely designed and developed for barangay use. It will automate the day-to-day operations and transactions in the barangay. The said project will improve the services of the barangay and the overall experience of the residents.</h4>
        
<div class="breadcrumb justify-content-center text-center" style="margin-top: 10px; background-color: #3c8dbc; color: white; ">
    <h3><b><i class="fa fa-phone-square" aria-hidden="true"></i> Barangay Contact Hotlines</b></h3>
      <h4><i class="fa fa-mobile" aria-hidden="true" style="margin-top: 10px;"></i> BARANGAY | Poblacion - 09361174734/09057198345</h4>
      <h4><i class="fa fa-mobile" aria-hidden="true" style="margin-top: 10px;"></i> BFP | Naawan - 09672446008</h4>
      <h4><i class="fa fa-mobile" aria-hidden="true" style="margin-top: 10px;"></i> MDRRMO | Naawan - 09620408084</h4>
      <h4><i class="fa fa-mobile" aria-hidden="true" style="margin-top: 10px;"></i> PNP | Naawan - 09985986963</h4>
          
<div class="breadcrumb justify-content-center text-center" style="margin-top: 10px; background-color: #3c8dbc; color: white; ">
    <h3><b><i class="fa fa-share-square-o" aria-hidden="true"></i> Social Media Accounts</b></h3>
      <h4><i class="fa fa-facebook-square aria-hidden="true" style="margin-top: 10px;"></i> <a href="https://web.facebook.com/profile.php?id=61556262989223" style="color: white; text-decoration: underline;"> Barangay Poblacion Naawan</a></h4>
      <h4><i class="fa fa-envelope" aria-hidden="true" style="margin-top: 10px;"></i> <a href="https://web.facebook.com/profile.php?id=61556262989223" style="color: white; text-decoration: underline;"> brgy.poblacion.naawan@gmail.com</a></h4>
    </div>
  </body>

<script src="../js/alert.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>


<script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
<script src="../js/morris/morris.js" type="text/javascript"></script>
<script src="../js/select2.full.js" type="text/javascript"></script>

<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../js/buttons.print.min.js" type="text/javascript"></script>

<script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../js/AdminLTE/app.js" type="text/javascript"></script>

<script type="text/javascript">
  $(function() {
      $("#table").dataTable({
         "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
      });
  });
</script>
</html>
