
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Online_Pet_Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	</head>
		<body>
			<!----start-body------->
			<!----star-wrapper-demo------->
			<div class="wrapper-demo">
				<!-----start-wrapper-dropdown-2---->
				
				<mark>USER ID:</mark> <input type="text" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
					<div id="dd" class="wrapper-dropdown-2" tabindex="1">Book Your Pets<span><img src="images/menu.png"/></span>
					
							<ul class="dropdown">
							
									<li><a href="../user_profile.php">PROFILE<span class="icon signout"> </span></a></li>
									<li><a href="../view_category_user.php">PET CATEGORIES<span class="icon signout"> </span></a></li>

									
									<!--<li><a href="../view_pet_user.php">VIEW PET<span class="icon signout"> </span></a></li>-->

									
									<li><a href="../view_accessories_user.php">VIEW ACCESSORIES<span class="icon stat"> </span></a></li>
									<li><a href="../view_cart.php">MY CART<span class="icon signout"> </span></a></li>
									<li><a href="../view_order.php"> PET BOOKING DETAILS<span class="icon stat"> </span></a></li>
									<li><a href="../view_acc_order.php">ACESSORIES ORDER <span class="icon stat"> </span></a></li>
									<li><a href="../logout.php">LOGOUT<span class="icon "> </span></a></li>
							</ul>
					</div>
</div>

					
<!--<div >
    <table>
		<tr><a href="../view.php?choice=DOG">DOG</a></tr>
          </table>
		  <table>
		<tr><a href="../view.php?choice=CAT">CAT</a></tr>
          </table>
		  <table>
		<tr><a href="../view.php?choice=BIRDS">BIRDS</a></tr>
          </table>
		  <table>
		<tr><a href="../view.php?choice=RABBIT">RABBIT</a></tr>
          </table>
		
</div>-->
				


			<!-----end-wrapper-dropdown-2---->
			<!-----start-script---->
			<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});
				
							});
			</script>
			<!-----end-script---->
			<!----end-wrapper-demo----->
			<!-----start-copyright---->
			<!--<div class="copy-right">
					
			</div>-->
			<!-----end-copyright---->
			<!----end-body------->
	</body>
</html>