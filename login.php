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
        <div class="panel-heading" style="text-align: center; background-color: #3c8dbc; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                <img src="img/poblacionlogo.png" style="height:100px;"/>
              <h3 class="panel-title" style="color: white;">𝐁𝐚𝐫𝐚𝐧𝐠𝐚𝐲 𝐄-𝐬𝐞𝐫𝐯𝐢𝐜𝐞 𝐒𝐲𝐬𝐭𝐞𝐦</h3>
          
          </div>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group" style="text-align:center; background-color: #f9f9f9;">
                       <!-- <label for="txt_username">𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞</label> !-->
                        <input type="text" class="form-control" style="text-align:center;" name="txt_username" placeholder="𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞">
                    </div>
                    <div class="form-group" style="text-align:center; background-color: #f9f9f9;">
                      <!-- <label for="txt_password">𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝</label> !--->
                            <input type="password" class="form-control" style="text-align:center; margin-bottom: 10px;" name="txt_password" id="passwordInput" placeholder="𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝">
                            <div class="input-group-append">
                                <span class="input-group-text" style="margin-top: 10px;">
                                    <input type="checkbox" onclick="togglePasswordVisibility()"> 𝐕𝐢𝐞𝐰 𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝
                                </span>
                            </div>
                        </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-primary" name="btn_login">𝐋𝐨𝐠 𝐈𝐧</button>
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
if(isset($_POST['btn_login'])) {
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


    if($numrow_admin > 0) {
        while($row = mysqli_fetch_array($admin)) {
            $_SESSION['role'] = "Administrator";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        header('location: pages/dashboard/dashboard.php');
    } elseif($numrow_zone > 0) {
        while($row = mysqli_fetch_array($zone)) {
            $_SESSION['role'] = "Barangay Captain";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        header('location: pages/permit/permit.php');
    } elseif($numrow_staff > 0) {
        while($row = mysqli_fetch_array($staff)) {
            $_SESSION['role'] = $row['name'];
            $_SESSION['staff'] = "Staff";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        header('location: pages/resident/resident.php');

    } elseif($numrow_resident > 0) {
        while($row = mysqli_fetch_array($resident)) {
            $_SESSION['role'] = $row['fname'];
            $_SESSION['resident'] = "Resident";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        header('location: pages/activity/activity.php');
    }
    echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';
}

?>

    </body>
</html>
