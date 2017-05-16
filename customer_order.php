<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shiv Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			table tr td {padding:10px;}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Shiv Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order details</h1>
						<hr/>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/sam1.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Samsung</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/sam2.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Samsung</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/sam3.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Samsung</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/app1.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Apple</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/app2.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Apple</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/app3.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Apple</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/applap1.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Apple</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/applap2.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Apple</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/applap3.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Apple</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/samlap1.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Samsung laptop</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/samlap2.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Samsung laptop</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/huwa1.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Huwaei</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/huwa2.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Huwaei</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/huwa3.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Huwaei</b> </td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>

							</div>
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
