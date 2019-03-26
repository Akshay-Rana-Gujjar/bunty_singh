
<html>
	<head>
		<title>Stock Photo Website</title>
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	</head>
	<body>

		<?php 

		require_once("./constants.php");
		
		// Create connection
		$conn = mysqli_connect($servername, $username,$password, $dbname);
		
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
		$getImageQuery = "select url from `Stock` where category = 'test'";
		
		$result = mysqli_query($conn, $getImageQuery);
		
		while($row = $result->fetch_assoc()) {
			echo $row["url"];
			echo "<img src='".$row["url"]."'/>";
		}
		
		mysqli_close($conn);
		
		?>

		<!--App Menu Starts-->
		<div class="contain">
			<div class="lox">
				<div class="app">
					<div class="appmain">
						<a href="index.php" class="men-text">
							<img src="681517_1550814094.jpeg" alt="" class="men-img">
						</a>
						<a href="index.php" class="men-text">
							<img src="710036_1550809412.jpeg" alt="" class="men-img">
						</a>
						<a href="index.php" class="men-text">
							<img src="909486_1550809281.jpeg" alt="" class="men-img">
						</a>
						<a href="index.php" class="men-text">
							<img src="681517_1550814094.jpeg" alt="" class="men-img">
						</a>
						<a href="index.php" class="men-text">
							<img src="681517_1550814094.jpeg" alt="" class="men-img">
						</a>
						<a href="index.php" class="men-text">
							<img src="681517_1550814094.jpeg" alt="" class="men-img">
						</a>
						<a href="index.php" class="men-text">
							<img src="681517_1550814094.jpeg" alt="" class="men-img">
						</a>
						<a href="index.php" class="men-text">
							<img src="681517_1550814094.jpeg" alt="" class="men-img">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--App Menu Ends-->



		<!---->

		<div class="band">
			<div class="container">
				<!--Start From Here-->
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-8">
							<div class="nits">
								<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-8">
							<div class="bisk5">
								<div class="nits">
									<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<!--Here Ends--><!--Start From Here-->
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-8">
							<div class="nits">
								<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-8">
							<div class="bisk5">
								<div class="nits">
									<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<!--Here Ends--><!--Start From Here-->
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-8">
							<div class="nits">
								<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-8">
							<div class="bisk5">
								<div class="nits">
									<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<!--Here Ends--><!--Start From Here-->
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-8">
							<div class="nits">
								<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-8">
							<div class="bisk5">
								<div class="nits">
									<img src="loader.gif" alt="" data-echo="909486_1550809281.jpeg" class="img-responsive cover my-image">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<div class="bron">
					<div class="row">
						<div class="col-4">
							<div class="bisk">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk4">
								<div class="bisk1">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
								<div class="bisk2">
									<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="bisk1">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
							<div class="bisk2">
								<img src="loader.gif" alt="" data-echo="681517_1550814094.jpeg" class="img-responsive cover my-image1">
							</div>
						</div>
					</div>
				</div>
				<!--Here Ends-->


			</div>

		</div>

		<!--App Menu Ends-->
 


		<!-- ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'test';  -->






		<script src="https://rawgit.com/toddmotto/echo/master/dist/echo.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
		<script src="bootstrap-lazy-load.js"></script>
	</body>
</html>
