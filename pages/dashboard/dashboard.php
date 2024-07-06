<!DOCTYPE html>
<html>

    <?php
    session_start();
    if(!isset($_SESSION['role'])) {
        header("Location: ../../login.php");
    } else {
        ob_start();
        include('../head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php

            include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard as of <?php echo date('F d, Y');
        echo " at ".date('h:i A');?>
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                
                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../household/household.php"><span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Households</span>
                                      <span class="info-box-number">
                                        <?php
                            $q = mysqli_query($con, "SELECT * from tblhousehold");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Residents</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblresident");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-male"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Males</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblresident where gender = 'Male'");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-female"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Females</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblresident where gender = 'Female'");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Seniors</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * FROM tblresident WHERE age >= 60");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;

        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                
                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-child"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Minors</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * FROM tblresident WHERE age < 18");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../clearance/clearance.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Requested Clearances</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblclearance where status = 'Approved' ");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../permit/permit.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Requested Permits</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblpermit where status = 'Approved' ");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../blotter/blotter.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Complained Blotters</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblblotter");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                
                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../report/report.php"><span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Resident Reports</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblresident ");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                
                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../activity/activity.php"><span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Announcements</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT * from tblactivity");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Resident Accounts</span>
                                      <span class="info-box-number">
                                        <?php
            $q = mysqli_query($con, "SELECT username, password from tblresident");
        $num_rows = mysqli_num_rows($q);
        echo $num_rows;
        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
    include "../footer.php"; ?>
<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
    });
</script>
    </body>
</html>
