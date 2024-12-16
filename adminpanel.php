<?php
session_start();

include "dashboard1.php";
include "db.php";

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>D</title>
	
	<link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
	<!-- build:css assets/css/app.min.css -->
	<link rel="stylesheet" href="libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="libs/bower/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="assets/css/core.css"> -->
	<link rel="stylesheet" href="assets/css/app.css">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
	<script>
		Breakpoints();
	</script>
</head>
	
<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->





<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap" style="
    padding-top: 1.5rem;
    padding-left: 9.5rem;
    padding-right: 1.5rem;
">
	<section class="app-content">
		<div class="row">
			
		<div class="row">
            <!--first box-->
			<div class="col-md-6 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						 <?php /*
                        
                                $mobile=$_SESSION['mobile'];;
        $sql ="SELECT * from  `appointment` where Status is null && Doctor=:mobile ";
        $query = $dbh -> prepare($sql);
        $query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $totnewapt=$query->rowCount();
*/
?>
						<div class="pull-left">
							<h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp"></span></h3>
									
							<small class="text-color">Total New Appointment</small>
							
						</div>
						
						<span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
						
					</div>
					<?php
							include "db.php";
							$query ="SELECT STATUS FROM `appointment` WHERE status = ''";

							$query_run = mysqli_query($con,$query);
							$row = mysqli_num_rows($query_run);
							echo '<h1> '.$row.' </h1>';
					?>
					
					
					<footer class="widget-footer bg-warning">
						<a href="newappointment.php"><small> View Detail</small></a>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>



			<div class="col-md-6 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<?php 
                        /*
						 $docid=$_SESSION['damsid'];;
//$sql ="SELECT * from  tblappointment where Status='Approved' && Doctor=:docid ";
$query = $dbh -> prepare($sql);
$query-> bindParam(':docid', $docid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totappapt=$query->rowCount();
*/
?>
						<div class="pull-left">
							<h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp"></span></h3>
							<small class="text-color">Total Approved</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
					</div>
					<?php
							include "db.php";
							$query ="SELECT STATUS FROM `appointment` WHERE status = 'selected'";

							$query_run = mysqli_query($con,$query);
							$row = mysqli_num_rows($query_run);
							echo '<h1> '.$row.' </h1>';
					?>
					<footer class="widget-footer bg-success">
						<a href="acceptedappointment.php"><small> View Detail</small></a>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[1,2,3,5,4], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<?php 
                            /*
						 $docid=$_SESSION['damsid'];;
//$sql ="SELECT * from  tblappointment where Status='Cancelled' && Doctor=:docid ";
$query = $dbh -> prepare($sql);
$query-> bindParam(':docid', $docid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totncanapt=$query->rowCount();
*/
?>
							<h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp"></span></h3>
							<small class="text-color">Cancelled Appointment</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-unlock-alt"></i></span>
					</div>
					<?php
							include "db.php";
							$query ="SELECT STATUS FROM `appointment` WHERE status = 'rejected'";

							$query_run = mysqli_query($con,$query);
							$row = mysqli_num_rows($query_run);
							echo '<h1> '.$row.' </h1>';
					?>
					<footer class="widget-footer bg-danger">
						<a href="rejectedappointment.php"><small> View Detail</small></a>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[2,4,3,4,3], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">

						<div class="pull-left">
							<?php /*
						 $docid=$_SESSION['damsid'];;
//$sql ="SELECT * from  tblappointment where Doctor=:docid ";
$query = $dbh -> prepare($sql);
$query-> bindParam(':docid', $docid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totapt=$query->rowCount();
*/
?>
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp"></span></h3>
							<small class="text-color">Total Appointment</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
					</div>
					<?php
							include "db.php";
							$query ="SELECT `Name`FROM `appointment` ORDER by Name";

							$query_run = mysqli_query($con,$query);
							$row = mysqli_num_rows($query_run);
							echo '<h1> '.$row.' </h1>';
					?>
					<footer class="widget-footer bg-primary">
						<a href="viewdata.php"><small> View Detail</small></a>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[5,4,3,5,2],{ type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->



		<div class="row">
		
	</section><!-- #dash-content -->
</div><!-- .wrap -->
  <!-- APP FOOTER -->
 
  <!-- /#app-footer -->
</main>
<!--========== END app main -->


	
	

	<!-- build:js assets/js/core.min.js -->
	<script src="libs/bower/jquery/dist/jquery.js"></script>
	<script src="libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->

	<!-- build:js assets/js/app.min.js -->
	<script src="assets/js/library.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="libs/bower/moment/moment.js"></script>
	<script src="libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="assets/js/fullcalendar.js"></script>
</body>
</html>
