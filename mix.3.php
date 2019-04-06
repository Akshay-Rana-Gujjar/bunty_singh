<?php
if (isset($_REQUEST['category'])) {
    $search = $_REQUEST['category'];
}

$db = mysqli_connect('localhost', 'admin_imagedb', 'admin_imagedb', 'admin_imagedb');
if (file_exists("constants.php")) {
    require "./constants.php";
    $db = mysqli_connect($servername, $username, $password, $dbname);
}
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
						<!-- -->
<?php

$count = 0;
$image_col_8;
$design_1 = true;
$parent_array = array();
$child_array = array();
$iteration_comp = false;
$image_url = array();

while ($row = mysqli_fetch_assoc($result1)) {

    $image_url[] = array("id"=> $row['id'],"image_url"=>"uploads/thumb/" . $row['image_name']);
}
$image_url = array_reverse($image_url, true);
foreach ($image_url as $img) {

    if (($count + 1) <= $resultCheck3 % 9 && !$iteration_comp) {
        $child_array[] = $img;
        if (($count + 1) == $resultCheck3 % 9) {
            $parent_array[] = array_reverse($child_array, false);
            $child_array = array();
            $count = 0;
            $iteration_comp = true;
        }

    } else if (($count) % 9 == 0) {
        $child_array[] = $img;
        $parent_array[] = array_reverse($child_array, false);
        $child_array = array();
        $count = 0;

    } else {
        $child_array[] = $img;
    }
    $count++;
}

$prepared_result = array_reverse($parent_array);

$next_element;
$display = true;
$dispaly_8 = true;
$first_row_printed = false;

foreach ($prepared_result as $index => $a) {

   
    $next_element;
    if (($index + 1) % 2 == 1) {
        $display = true;
    } else {
        $display = false;
    }

    $dispaly_8 = true;
    $first_row_printed = false;

    foreach ($a as $row) {

        if ($display) {

            $next_element = next($a);
            echo "<div class='col-4'>";
            echo " <div class='mat'><a href='/image.php?img_id=".$row['id']."'>
                                    <img src='loader.gif'  data-echo='".$row["image_url"]."' class='img-responsive cover my-image1'> </a>
																</div>";
            echo " <div class='mat'><a href='/image.php?img_id=".$next_element['id']."'>
                                    <img src='loader.gif'  data-echo='".$next_element['image_url']."' class='img-responsive cover my-image1'></a>
                                </div>";

            echo "</div>";
            $display = false;
            $first_row_printed = true;
            continue;
        }
        if ($dispaly_8) {
            if (!$display && !$first_row_printed) {

                echo "<div class='col-8'>
							                            <div class='mat'><a href='/image.php?img_id=".$row['id']."'>
							                                <img src='loader.gif'  data-echo='".$row['image_url']."' class='img-responsive cover my-image'></a>
							                            </div>
							                        </div>";

                next($a);
            } else {

                $next_element = next($a);
                echo "<div class='col-8'>
								<div class='mat'><a href='/image.php?img_id=".$next_element['id']."'>
										<img src='loader.gif'  data-echo='".$next_element['image_url']."' class='img-responsive cover my-image'></a>
								</div>
						</div>";
            }

            $dispaly_8 = false;
            //next($a);
            continue;
        }
        if ($row == $next_element) {
            next($a);
            continue;
        }

        $next_element = next($a);
        echo "<div class='col-4'>";
        echo " <div class='mat'><a href='/image.php?img_id=".$row['id']."'>
                                    <img src='loader.gif'  data-echo='".$row['image_url']."' class='img-responsive cover my-image1'></a>
																</div>";
        echo " <div class='mat'><a href='/image.php?img_id=".$next_element['id']."'>
                                    <img src='loader.gif'  data-echo='".$next_element['image_url']."' class='img-responsive cover my-image1'></a>
                                </div>";
        
        echo "</div>";


    }
}

?>
				</div>
				</div>
			</div>
			</div>

		<script src="https://rawgit.com/toddmotto/echo/master/dist/echo.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
		<script src="bootstrap-lazy-load.js"></script>
	</body>
</html>
