<?php
if (isset($_REQUEST['model_name'])) {
    $search = $_REQUEST['model_name'];
}
$db = mysqli_connect('localhost', 'admin_root', 'admin_root', 'admin_root');
$sql3 = "SELECT * FROM poses WHERE model_name LIKE '%$search%'";
$sql1 = "SELECT * FROM model_image WHERE model_category LIKE '%$search%' ORDER BY RAND()";

$result3 = mysqli_query($db, $sql3);
$result2 = mysqli_query($db, $sql1);
$resultCheck3 = mysqli_num_rows($result2);

?>

<?php 
while($row = mysqli_fetch_assoc($result3)){
    $src = "img/stock/".$row['model_pic'];
    $cat = $row['model_name'];

}
?>



<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Instagram User Profile</title>



        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

    <body>

        <div class="content-wrapper">
            <div class="dots-wrapper">
                <div class="dots"></div>
            </div>
            <div class="img"><img src="<?php echo "$src" ?>"/></div>
            <div class="wave -one"></div>
            <div class="wave -two"></div>
            <div class="wave -three"></div>
            <div class="user">
                <div class="profile--info"><span class="username"><?php echo "$cat" ?></span><span>@<?php echo "$cat" ?></span><br/><span class="userquote">Developer & freelance web designer.</span></div>
                <div class="user-social-wrapper">
                    <div class="user-info user-posts"><span><?php echo "$resultCheck3" ?></span><span>shots</span></div>
                    <div class="user-info user-followers"><span>164</span><span>followers</span></div>
                    <div class="user-info user-following"><span>81</span><span>following</span></div>
                </div><a href="#">Follow</a>

   
                <div class="bcc">
                    <div class="container">
                        <div class="shots">
                            <div class="row">


                                <?php 
    while($row = mysqli_fetch_assoc($result2)){
        $src = "../uploads/model/thumb/".$row['model_img'];
        echo "<div class='col-4'>
                                    <a href='/image.php?img_id=" . $row['id'] . "&model=true'><div class='shot'><img src='$src'/></div></a>
                                </div>";

    }
                                ?>
                                

                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="menu-bar-wrapper">
                <div class="menu-bar active"><i class="fa fa-home" aria-hidden="true"></i>
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-user active" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='http://use.fontawesome.com/f09496b7cc.js'></script>



        <script  src="js/index.js"></script>




    </body>

</html>
