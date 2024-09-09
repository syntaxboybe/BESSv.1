<!DOCTYPE html>
<html>
<?php
session_start();
?>
    <head>
        <meta charset="UTF-8">
        <title>Barangay E-Service System</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                background-image: url("img/blur-background09.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body class="skin-black">
        <div class="container" style="margin-top:150px">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center;">
                <img src="../../img/poblacionlogo.png" style="height:150px;"/>
              <h3 class="panel-title">
                <strong>
                    Barangay E-Service System
                </strong>
              </h3>
            </div>
            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group">
                  <label for="txt_username">Username</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="txt_username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="txt_password">Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                <label id="error" class="label label-danger pull-right"></label> 
              </form>
            </div>
          </div>
          </div>
        </div>

      <?php
        include "../connection.php";
if(isset($_POST['btn_login'])) {
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    $user = mysqli_query($con, "SELECT * from tblzone where username = '$username' and password = '$password' ");
    $numrow_user = mysqli_num_rows($user);

    if($numrow_user > 0) {
        while($row = mysqli_fetch_array($user)) {
            $_SESSION['role'] = "Barangay Captain";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        header('location: ../permit/permit.php');
    } else {
        echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';

    }

}

?>

    </body>
</html>
