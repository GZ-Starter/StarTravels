<?php
session_start();
error_reporting(0);
@include 'config.php';

include('includes/config.php');

$pid = $_GET['pid'];
if (isset($_POST['submit'])) {
	$pname = $_POST['packagename'];
	// $ptype = $_POST['packagetype'];
	$plocation = $_POST['packagelocation'];
	$pprice = $_POST['packageprice'];
	$pfeatures = $_POST['packagefeatures'];
	$pdetails = $_POST['packagedetails'];
	$pickup = $_POST['pickup'];
	// $pimage = $_POST["packageimage"];
	$sql = mysqli_query($conn, "UPDATE tblpackages SET name='$pname', packagelocation='$plocation', price='$pprice', packagefeatures='$pfeatures', packagedetails='$pdetails',pickuppoint='$pickup' WHERE packageId='$pid'");

	// $query = $dbh->prepare($sql);
	// $query->bindParam(':pname', $pname, PDO::PARAM_STR);
	// $query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
	// $query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
	// $query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
	// $query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
	// $query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
	// $query->bindParam(':pickup', $pickup, PDO::PARAM_STR);
	// $query->bindParam(':pid', $pid, PDO::PARAM_STR);
	// $query->bindParam(':pimg', $pimage);
	// $query->execute();

	// header('location:update-package.php');

	if ($sql) {
		echo "<script>alert('Package Updated Successfully');</script>";
	} else {
		echo "<script>alert('Error');</script>";
	}


}
if (isset($_POST['del'])) {
	$delete=mysqli_query($conn,"DELETE FROM tblpackages WHERE packageId='$pid'");
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>The Traveller | Admin Package Creation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery-2.1.4.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
		}

		.succWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
		}
	</style>

</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<?php include('includes/header.php'); ?>

				<div class="clearfix"> </div>
			</div>
			<!--heder end here-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Update Tour Package </li>
			</ol>
			<!--grid-->
			<div class="grid-form">

				<!---->
				<div class="grid-form1">
					<h3>Update Package</h3>
					<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

							<?php
							$pid = $_GET['pid'];
							$sql = "SELECT * from tblpackages where packageId=:pid";
							$query = $dbh->prepare($sql);
							$query->bindParam(':pid', $pid, PDO::PARAM_STR);
							$query->execute();
							$results = $query->fetchAll(PDO::FETCH_OBJ);
							$cnt = 1;
							if ($query->rowCount() > 0) {
								foreach ($results as $result) {	?>

									<form class="form-horizontal" name="package" method="post">
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Create Package" value="<?php echo htmlentities($result->name); ?>" required>
											</div>
										</div>
										<!-- <div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Package Type</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder=" Package Type eg- Family Package / Couple Package" value="<?php echo htmlentities($result->type); ?>" required>
												</div>
											</div> -->

										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Package Location</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder=" Package Location" value="<?php echo htmlentities($result->packagelocation); ?>" required>
											</div>
										</div>

										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Package Price </label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder=" Package Price " value="<?php echo htmlentities($result->price); ?>" required>
											</div>
										</div>

										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Pickup location</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" name="pickup" id="pickup" placeholder="Pickup location" value="<?php echo htmlentities($result->pickuppoint); ?>" required>
											</div>
										</div>

										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Package Features</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Package Features Eg-free Pickup-drop facility" value="<?php echo htmlentities($result->packagefeatures); ?>" required>
											</div>
										</div>


										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
											<div class="col-sm-8">
												<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details" required><?php echo htmlentities($result->packagedetails); ?></textarea>
											</div>
										</div>
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
											<div class="col-sm-8">
												<!-- <img src="KarnatakaImages/<?php echo htmlentities($result->image); ?>" width="200">&nbsp;&nbsp;&nbsp; -->
												<img src="KarnatakaImages/<?php echo htmlentities($result->image); ?>" width="200">&nbsp;&nbsp;&nbsp;<a href="change-image.php?imgid=<?php echo htmlentities($result->packageId); ?>">Change Image</a>

												<!-- <input type="file" name="packageimage" id="packageimage" accept="image/png, image/jpg image/jpeg"> -->
											</div>
										</div>

										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Creation Date</label>
											<div class="col-sm-8">
												<!-- <input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder=" Package Location" value="<?php echo htmlentities($result->packagelocation); ?>" required> -->
												<?php echo htmlentities($result->creationdate); ?>
											</div>
										</div>

										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Last Updated on </label>
											<div class="col-sm-8">
												<?php echo htmlentities($result->updationdate); ?>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-8 col-sm-offset-2">
												<input type="submit" name="submit" value="Update" class="btn-primary btn">

											</div>

										</div>

						</div>

						</form>
						<form action="" method="post">
						<input type="hidden" name="id" value="<?php echo htmlentities($result->packageId); ?>">
						<input type="submit" name="del" value="Delete" class="btn-primary btn">
						</form>

				<?php
								};
							};
				?>




				<div class="panel-footer">

				</div>
				</form>
					</div>
				</div>
				<!--//grid-->

				<!-- script-for sticky-nav -->
				<script>
					$(document).ready(function() {
						var navoffeset = $(".header-main").offset().top;
						$(window).scroll(function() {
							var scrollpos = $(window).scrollTop();
							if (scrollpos >= navoffeset) {
								$(".header-main").addClass("fixed");
							} else {
								$(".header-main").removeClass("fixed");
							}
						});

					});
				</script>
				<!-- /script-for sticky-nav -->
				<!--inner block start here-->
				<div class="inner-block">

				</div>
				<!--inner block end here-->
				<!--copy rights start here-->
				<?php include('includes/footer.php'); ?>
				<!--COPY rights end here-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<?php include('includes/sidebarmenu.php'); ?>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<!-- <script src="js/jquery.nicescroll.js"></script> -->
	<!-- <script src="js/scripts.js"></script> -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- /Bootstrap Core JavaScript -->

</body>

</html>
<?php  ?>