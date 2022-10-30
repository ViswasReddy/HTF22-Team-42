<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
	  { 
			  $userid=$_POST['uid'];
				$pres=$_POST['pres']; 
				$userstatus=1;
$docstatus=1;
				mysqli_query($con,"update appointment set prescribe='$pres' where userid ='$userid'");
				//$user=mysqli_query($con,"select id from appointment where '$userstatus'=1 and '$docstatus=1'");

	  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Prescription Form</title>
		<style>
		.textboxclass
		{
    height:200px;
    font-size:14pt;
		width:300px
		}
		</style>

		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">
<?php include('include/sidebar.php');?>
			<div class="app-content">


					<?php include('include/header.php');?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Prescription Form</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Appointment History</span>
									</li>
								</ol>
							</div>
						</section>


			<div class="container-fluid container-fullw bg-white">
				<div class="row">
					<div class="col-md-12">

						<div class="row margin-top-30">
							<div class="col-lg-8 col-md-12">
								<div class="panel panel-white">
									<div class="panel-heading">
										<h5 class="panel-title">Prescription</h5>
									</div>
									<div class="panel-body">
					<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
					<?php echo htmlentities($_SESSION['msg1']="");?></p>
				<form role="form" name="book" method="post" >


					<div class="form-group">
							<label for="uid">
								User ID
							</label>
							<input type="text" name="uid"  required="required">
					</div>
                
					<div class="form-group">
							<label for="pres">
								Prescription
							</label>
							<textarea rows="15" cols="50" name="pres" required="required"></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-o btn-primary">
						Submit
					</button>
				</form>
