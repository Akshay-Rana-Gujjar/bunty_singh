<?php

$db = mysqli_connect('localhost', 'admin_root', 'admin_root', 'admin_root');
if (file_exists("../constants.php")) {
    require "../constants.php";
    $db = mysqli_connect($servername, $username, $password, $dbname);
}
$sql1 = "SELECT * FROM category ORDER BY id";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);

?>

<html style="width:100%;" >
	<head>
		<title>All Models</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="six.css">
		<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<meta name="theme-color" content="#007bff">

	</head>
	<body>

		<div class="container-fluid  text-center bg-primary text-white">
			<div>Total No Of Category = <?php echo $resultCheck1 ?></div>
		</div>

		<div class="row mt-2 container-fluid">
			<?php
				while ($row = mysqli_fetch_assoc($result1)) {
					echo "<div class='col-md-4 col-6  mt-2'>";
					$src = "../img/stock/" . $row['img'];
					$cat = $row['category_name'];
					$id = $row['id'];

					echo '<div class="card" style="">
					<img src="'.$src.'" class="card-img-top" alt="...">
					<div class="card-body">
					  <div class="card-title">'.$cat.'</div>
						  <div  class="btn-group " style role="group"  data-cat-data="{id:'.$id.', src:'."'".$scr."'".', name:'."'".'}">  
								<button type="button" class="btn btn-light" onclick="editCategory(this)"> 
									<i class="zmdi zmdi-edit"></i>

								</button>
								<button type="button" class="btn btn-danger"> 
									<i class="zmdi zmdi-delete"></i>

								</button>
								
								</div>
					  

					</div>
				  </div>';
					
					echo '</div>';
				}
			?>

		</div>


		<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="see.php" method="post">
						<input type="hidden" name="id" id="category_id">
						<img id="category_img" class="img-thumbnail">
						<br>
						<input type="file" name="category_img_src" id="category_img_src" class="mt-1">

						<input type="text" class="form-control mt-1" name="category_name" id="category_name">
						<button type="button" class="btn btn-secondary mt-1" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary mt-1">Save changes</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script>

				function editCategory(button){
					console.log($(button).parent().data("cat-id"));
					var CATEGORY_ID = $(button).parent().data("cat-id");
					var category_id = $("#category_id");
					var category_img = $("#category_img");
					var category_name = $("#category_name");

					category_id.val(CATEGORY_ID);
					


					$("#categoryModal").modal("show");
				}
		
		</script>
	</body>
</html>