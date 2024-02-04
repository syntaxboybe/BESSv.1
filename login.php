<!DOCTYPE html>
<html>
<?php
session_start();
?>
    <head>
        <meta charset="UTF-8">
        <title>Barangay E-service System</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/select2.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-black">

        <div class="container" style="margin-top:150px">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center;">
                <img src="img/poblacionlogo.png" style="height:150px;"/>
              <h3 class="panel-title">
                <strong>
                    Barangay E-service System
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
                            <input type="password" class="form-control" style="border-radius:0px" name="txt_password" id="passwordInput" placeholder="Enter Password">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
                                </span>
                            </div>
                        </div>
                    <div class="text-center"> 
                    <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                    </div>
                    <label id="error" class="label label-danger pull-right"></label> 
                </form>
            </div>
            
            <script>
            function togglePasswordVisibility() {
                var passwordInput = document.getElementById('passwordInput');
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                } else {
                    passwordInput.type = "password";
                }
            }
            </script>

      <?php
        include "pages/connection.php";
        if(isset($_POST['btn_login']))
        { 
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];


            $admin = mysqli_query($con, "SELECT * from tbluser where username = '$username' and password = '$password' and type = 'administrator' ");
            $numrow_admin = mysqli_num_rows($admin);

            $zone = mysqli_query($con, "SELECT * from tblzone where username = '$username' and password = '$password'");
            $numrow_zone = mysqli_num_rows($zone);

            $staff = mysqli_query($con, "SELECT * from tblstaff where username = '$username' and password = '$password' ");
            $numrow_staff = mysqli_num_rows($staff);

            $resident = mysqli_query($con, "SELECT * from tblresident where username = '$username' and password = '$password' ");
            $numrow_resident = mysqli_num_rows($resident);


            if($numrow_admin > 0)
            {
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "Administrator";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/dashboard/dashboard.php');
            }
            elseif($numrow_zone > 0)
            {
                while($row = mysqli_fetch_array($zone)){
                  $_SESSION['role'] = "Barangay Captain";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/activity/activity.php');
            }
            elseif($numrow_staff > 0)
            {
                while($row = mysqli_fetch_array($staff)){
                  $_SESSION['role'] = $row['name'];
                  $_SESSION['staff'] = "Staff";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/resident/resident.php');
                
            }
            elseif($numrow_resident > 0)
            {
                while($row = mysqli_fetch_array($resident)){
                  $_SESSION['role'] = $row['fname'];
                  $_SESSION['resident'] = "Resident";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/activity/activity.php');
            }
              echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';
            }
        
      ?>

    </body>
</html>