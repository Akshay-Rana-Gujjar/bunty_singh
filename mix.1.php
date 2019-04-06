<?php
if(isset($_REQUEST['category'])){
	$search = $_REQUEST['category'];
}
require_once("./constants.php");
$db = mysqli_connect($servername, $username,$password, $dbname);
$sql1 = "SELECT * FROM tbl_images WHERE category LIKE '%$search%' ORDER BY id DESC";
$result1 = mysqli_query($db, $sql1);
$resultCheck3 = mysqli_num_rows($result1);
?>




<html>
	<head>
		<title>Stock Photo Website</title>
		<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	</head>
	<body>



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
		
		
		
		<div class="band">
			<div class="container">
				<div class="bnm">
					<div class="row">
						<!---->
						<?php 
                        $count = 1;
                        $arr = array(2,6,12,16,22,26,32);
                        while($row = mysqli_fetch_assoc($result1)){
	$img = "uploads/thumb/".$row['image_name'];
						
$divclass1 = "col-4";
$divclass2 = "col-8";
$imgclass1 = "my-image1";
$imgclass2 = "my-image";
if(in_array($count, $arr, true)){
    $divclass = $divclass2;
    $imgclass = $imgclass2;
    
    echo "<div class='$divclass'>
							<div class='mat'>
								<img src='loader.gif'  data-echo='$img' class='img-responsive cover $imgclass'>
							</div>
						</div>"; 
                        $count++;
}else{
    $divclass = $divclass1;
    $imgclass = $imgclass1;
    
    echo "<div class='$divclass'>
							<div class='mat'>
								<img src='loader.gif'  data-echo='$img' class='img-responsive cover $imgclass'>
							</div>"; 
                            echo "<div class='mat'>
								<img src='loader.gif'  data-echo='$img' class='img-responsive cover $imgclass'>
							</div>
						</div>"; 
                        $count++;
}
					?>
    <?php 
                        } ?>


					</div>
				</div>
			</div>
			</div>






		<!---->






		<script src="https://rawgit.com/toddmotto/echo/master/dist/echo.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
		<script src="bootstrap-lazy-load.js"></script>
	</body>
</html>
