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
		$pid=$_GET['pid'];
		
?>
<h1 class="w3ls">UPDATES PET</h1>

	<div class="content-agileits">
		
		<form action="../update_pet_conn.php" method="post" data-toggle="validator" role="form">
		<div class="form-group w3layouts w3 w3l">
				<label for="" class="control-label">PET ID</label>
				<input type="text" class="form-control" name="pid" id="pid" value="<?php echo $pid?>" readonly required autofocus>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group w3layouts w3 w3l">
				<label for="" class="control-label"> Pet Name</label>
				<input type="text" class="form-control" name="pname" id="pname" placeholder="Pet Name" data-error="Enter Pet Name" pattern="[A-Za-z\s]+" required autofocus>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group w3layouts w3 w3l">
			<label for="" class="control-label">Types</label>
                <input list="types" name="types" placeholder="Select From List" required pattern="[A-Z ]+" title="Capital Letters Only">
                <datalist id="types">
                    <option value="DOG">
                    <option value="CAT">
                    <option value="BIRDS">
                    <option value="RABBIT">
                
                </datalist>
			</div>
			<div class="form-group agileits w3layouts w3">
				<label for="" class="control-label">Description</label>
				<input type="text" class="form-control" name="desc" id="desc" placeholder="Description" data-error="Enter Description" required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group w3l agileinfo wthree w3-agileits">
				<label for="" class="control-label">Stock Quantity</label>
				<input type="text" class="form-control" name="stock" id="stock" placeholder="Stock" data-error="Enter StockQuantity" pattern="[0-9]+" required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group agileinfo wthree w3-agileits agile">
				<label for="" class="control-label"> Advance Amount</label>
				<input type="text" class="form-control" name="amount" id="amount" placeholder="Amount" data-error="Enter Amount" pattern="[0-9]+" required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group agileinfo wthree w3-agileits agile">
				<label for="" class="control-label">Image</label>
				<input type="file" class="form-control" name="image" id="image" placeholder="Image" data-error="Select Image" accept="image/png,image/jpeg,image/webp,image/tiff,image/jpg,image/webp " required autofocus>
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
