<?php

$db = mysqli_connect('localhost', 'admin_root', 'admin_root', 'admin_root');
if (file_exists("constants.php")) {
    require "./constants.php";
    $db = mysqli_connect($servername, $username, $password, $dbname);
}
$sql1 = "SELECT * FROM category ORDER BY id";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);


?>

<html>
	<head>
		<title>All Models</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="six.css">
	</head>
	<body>

		<div class="container">
			<div>Total No Of Category = <?php echo $resultCheck1 ?></div>
		</div>
 <?php 
                while($row = mysqli_fetch_assoc($result1)){
                    $src = "../img/stock/".$row['img'];
                    $cat = $row['category_name'];
			 echo "<div>$cat</div>
<img src='$src' width='100px'>
";

                }
                ?>

	</body>
</html>