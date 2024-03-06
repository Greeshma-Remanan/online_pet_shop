<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Online_Pet_Shop</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css file -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css file -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>
	<!-- title -->
	<h1>
	    <span>S</span>eller
		<span>R</span>egistration
		<span>F</span>orm
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true" action="../seller_registration_conn.php" method="post">
			<div class="form-group">
				<label for="exampleInputText">Name</label>
				<input type="text" class="form-control" name="sellername" id="exampleInputText" placeholder="Enter Name" pattern="[A-Za-z\s]+" required>
			</div>
			<div class="form-group">
				<label for="exampleInputText">Address</label>
				<input type="text" class="form-control" name="address" id="exampleInputText" placeholder="Enter Address" required>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" class="form-control" name="mobile" id="exampleMobile1" placeholder="Mobile number" pattern="[0-9]+" maxlength="10" minlength="10" required>
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Aadhar Number</label>
				<input type="text" class="form-control" name="aadhar" id="exampleMobile1" placeholder="Aadhar Number" pattern="[0-9]+" maxlength="12" minlength="12" required>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input maxlength="10" minlength="6" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
				minlength="6" maxlength="6" required autofocus>
			</div>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- Jquery -->
	<script src="js/jquery-simple-validator.min.js"></script>
	<!-- //Jquery -->

</body>

</html>