<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Online_Pet_Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Validation Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Muli:300,400" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel="stylesheet" type='text/css' media="all" />
<!-- /css -->
</head>
<body>
<?php 
		
		
?>
<h1 class="w3ls">UPDATE PROFILE</h1>

	<div class="content-agileits">
		
		<form action="../seller_update_conn.php" method="post" data-toggle="validator" role="form">
		<div class="form-group w3layouts w3 w3l">
			
				<center><tr><th><mark>SELLER ID:</mark></th><td><input type="number" name="sid" autofocus required readonly value=<?php session_start(); $sid = $_SESSION['sid']; echo $sid; ?>></td></center>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group w3layouts w3 w3l">
				<label for="" class="control-label">Name</label>
				<input type="text" class="form-control" name="sellername" id="sellername" placeholder="Seller Name" data-error="Enter Your Name" pattern="[A-Za-z\s]+" required autofocus>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group agileits w3layouts w3">
				<label for="" class="control-label">Address</label>
				<input type="text" class="form-control" name="address" id="address" placeholder="Address" data-error="Enter Address" required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group w3l agileinfo wthree w3-agileits">
				<label for="" class="control-label">Phone</label>
				<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" data-error="Enter Mobile Number" pattern="[0-9]+" maxlength="10" minlength="10" required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group w3l agileinfo wthree w3-agileits">
				<label for="" class="control-label">Aadhar</label>
				<input type="text" class="form-control" name="aadhar" id="aadhar" placeholder="aadhar" data-error="Enter Aadhar Number" pattern="[0-9]+" maxlength="12" minlength="12" required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group agileinfo wthree w3-agileits agile">
				<label for="" class="control-label">Password</label>
				<input type="text" class="form-control" name="password" id="password" placeholder="Password" data-error="Enter Password" minlength="6" maxlength ="6" required autofocus>
				<div class="help-block with-errors"></div>
			</div>
			
			<!--<div class="form-group agile agileits-w3layouts w3-agile">
				<label for="inputPassword" class="control-label">Password</label>
				<div class="form-inline row">
					<div class="form-group col-sm-6 agileits-w3layouts">
						<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
						<div class="help-block">Minimum of 6 characters</div>
					</div>
					<div class="form-group col-sm-6 w3-agile">
						<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm Password" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
			</div>-->
			<div class="form-group">
				<button type="submit" class="btn btn-lg">Submit</button>
				
			</div>
			<button><a href="../seller_home_temp/seller_homepage.php">HOME</a></button>

		</form>
    </div>
	

<!-- js files -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
<!-- /js files -->
</body>
</html>
