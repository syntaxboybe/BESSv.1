<html>
<head>
    <meta charset="UTF-8">
    <title>Barangay E-service System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>
    <style>
  .container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 87vh;
    background-color: #f8f8f8;
    background-color: #EEEEEE;
    background-color:#EEEDEB;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .carousel {
    flex: 1;
    height: 320px;
    overflow: hidden;
    position: absolute;
    margin: 0 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
    background-color: #EEEEEE;
    background-color:#EEEDEB;
  }

  .carousel img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .carousel .prev,
  .carousel .next {
    position: absolute;
    top: 100%;
    transform: translateY(-50%);
    font-size: 24px;
    color: white;
    cursor: pointer;
    z-index: 1;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 10px;
    transition: 0.3s;
    
  }

  .carousel .prev {
    left: 20px;
  }

  .carousel .next {
    right: 20px;
  }

  .text {
    flex: 1;
    padding: 0 20px;
  }

  .text h2 {
    font-size: 24px;
    font-weight: bold;
  }

  .text p {
    font-size: 16px;
  }

  footer {
    text-align: center;
    background-color: #f8f8f8;
    padding: 10px 0;
  }
    </style>
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
        <li><a href="javascript:void(0)" onclick="redirectLogin()">Login</a></li>
        
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

<div class="container" style="align-items: center;">
        <div class="row" style="align-items: center;">
            <div class="col-md-6">
                <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-size: auto;">
                    <div class="carousel-inner">
                        <div class="item active"><img class="w-100 d-block" src="../img/homepage.jpg" alt="Slide Image"></div>
                        <div class="item"><img class="w-100 d-block" src="../img/citizen_charter.png" alt="Slide Image"></div>
                        <div class="item"><img class="w-100 d-block" src="../img/bg.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        <div class="col-md-6 text-center">
    <h3><b>VISSION</b></h3>
    <h4>𝘈𝘯 𝘦𝘮𝘱𝘰𝘸𝘦𝘳𝘦𝘥 𝘢𝘯𝘥 𝘩𝘦𝘢𝘭𝘵𝘩𝘺 𝘕𝘢𝘢𝘸𝘢𝘯 𝘪𝘯 𝘢 𝘨𝘭𝘰𝘣𝘢𝘭𝘭𝘺-𝘤𝘰𝘮𝘱𝘦𝘵𝘪𝘵𝘪𝘷𝘦, 𝘦𝘤𝘰𝘭𝘰𝘨𝘪𝘤𝘢𝘭𝘭𝘺 𝘣𝘢𝘭𝘢𝘯𝘤𝘦𝘥 𝘢𝘯𝘥 𝘱𝘦𝘢𝘤𝘦𝘧𝘶𝘭 𝘔𝘪𝘴𝘢𝘮𝘪𝘴 𝘖𝘳𝘪𝘦𝘯𝘵𝘢𝘭 𝘶𝘯𝘥𝘦𝘳 𝘢 𝘳𝘦𝘴𝘱𝘰𝘯𝘴𝘪𝘷𝘦 𝘢𝘯𝘥 𝘢𝘤𝘤𝘰𝘶𝘯𝘵𝘢𝘣𝘭𝘦 𝘨𝘰𝘷𝘦𝘳𝘯𝘢𝘯𝘤𝘦.</h4>
    <br>
    <h3><b>MISSION</b></h3>
    <h4>𝘞𝘦 𝘴𝘩𝘢𝘭𝘭 𝘴𝘶𝘴𝘵𝘢𝘪𝘯 𝘰𝘶𝘳 𝘥𝘦𝘭𝘪𝘷𝘦𝘳𝘺 𝘰𝘧 𝘴𝘦𝘳𝘷𝘪𝘤𝘦𝘴 𝘵𝘰 𝘵𝘩𝘦 𝘧𝘶𝘭𝘭𝘦𝘴𝘵 𝘰𝘧 𝘰𝘶𝘳 𝘢𝘣𝘪𝘭𝘪𝘵𝘪𝘦𝘴, 𝘩𝘢𝘳𝘯𝘦𝘴𝘴𝘪𝘯𝘨 𝘰𝘶𝘳 𝘱𝘰𝘵𝘦𝘯𝘵𝘪𝘢𝘭𝘴, 𝘢𝘯𝘥 𝘣𝘶𝘪𝘭𝘥𝘪𝘯𝘨 𝘮𝘰𝘳𝘦 𝘮𝘦𝘢𝘯𝘪𝘯𝘨𝘧𝘶𝘭 𝘵𝘦𝘢𝘮𝘸𝘰𝘳𝘬; 𝘞𝘦 𝘸𝘪𝘭𝘭 𝘩𝘰𝘭𝘥 𝘢𝘯𝘥 𝘱𝘳𝘰𝘮𝘰𝘵𝘦 𝘢𝘵 𝘢𝘭𝘭 𝘵𝘪𝘮𝘦𝘴 𝘵𝘩𝘦 𝘱𝘳𝘪𝘯𝘤𝘪𝘱𝘭𝘦s.</h4>
      </div>
      </div>

</div>
</div>
    <footer>© 𝟐𝟎𝟐𝟑-𝟐𝟎𝟐𝟒 𝘉𝘢𝘳𝘢𝘯𝘨𝘢𝘺 𝘌-𝘴𝘦𝘳𝘷𝘪𝘤𝘦 𝘚𝘺𝘴𝘵𝘦𝘮</footer>
    </tbody>

</div>
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

</script>


</html>
