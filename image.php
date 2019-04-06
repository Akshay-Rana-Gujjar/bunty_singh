
<?php

if (isset($_REQUEST['category'])) {
    $search = $_REQUEST['category'];
}

$db = mysqli_connect('localhost', 'admin_imagedb', 'admin_imagedb', 'admin_imagedb');
if (file_exists("constants.php")) {
    require "./constants.php";
    $db = mysqli_connect($servername, $username, $password, $dbname);
}

$img_id = $_GET['img_id'];

if (!$img_id) {
    function siteURL()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'] . '/';
        return $protocol . $domainName;
    }

    $server_url = siteURL();
    header("Location: $server_url");
    exit();
}

$query = "SELECT image_name, likes, downloads FROM tbl_images WHERE `id` = '" . intval($img_id) . "'";
$like_count;
$download_count;
$image_url = "/uploads" . "/";
$result1 = mysqli_query($db, $query);
if ($result1) {

    $row = mysqli_fetch_assoc($result1);

    // echo "<!--  print_r($row )  -->";

    $image_url = $image_url . $row['image_name'];
    $like_count = $row['likes'];
    $download_count = $row['downloads'];

} else {
    echo "500 Error! Problem while executing query.";
    return;
}

//On page 1
// $_SESSION['varname'] = $var_value;

//On page 2
// $var_value = $_SESSION['varname'];

function thousandsCurrencyFormat($num)
{

    if ($num > 1000) {

        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;

    }

    return $num;
}
?>
<html>

    <head>
        <title>Images</title>
        <link rel="stylesheet" href="image.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Acme|Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js" integrity="sha256-mpnrJ5DpEZZkwkE1ZgkEQQJW/46CSEh/STrZKOB/qoM=" crossorigin="anonymous"></script>



    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="image">
                        <img src="<?php echo $image_url; ?>" alt="" class="images">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">

                        <div class="like" onclick="myFunction()">
                            <i id="like-icon" class="far fa-heart" data-img_id = "<?php echo $img_id; ?>"></i>
                             &nbsp; &nbsp; &nbsp; &nbsp;
                             <span id="like_count"><?php echo thousandsCurrencyFormat($like_count) ?></span> Likes</div>

                        </div>

                <div class="col-6"><div class="save" >&nbsp;<span id="download_count"><?php echo thousandsCurrencyFormat($download_count) ?></span> Downloads</div></div>

            </div>

            <div class="download" onclick="downloadImage('<?php echo $image_url; ?>')">
                <i class="fas fa-save"></i> &nbsp; Free Download
            </div>

            <div class="mycard">
                <div class="card">
                    <div class="card-body">
                       <div class="adi">Photo Information</div>
                        Below we have listed some special Independence day background which looks great with your photos you can use this background with your photos and show your cool photos to friends and family and you can thank us.
                    </div>
                </div>
            </div>

            <div class="simi">SIMILAR IMAGES</div>
            <div class="myimg">
                <div class="similarimg"><img src="car%20(32).jpg" alt="" class="simg"></div>
                <div class="similarimg"><img src="car%20(32).jpg" alt="" class="simg"></div>
                <div class="similarimg"><img src="car%20(32).jpg" alt="" class="simg"></div>
                <div class="similarimg"><img src="car%20(32).jpg" alt="" class="simg"></div>
                <div class="similarimg"><img src="car%20(32).jpg" alt="" class="simg"></div>
            </div>

             <div class="mycard">
                <div class="card">
                    <div class="card-body">
                       <div class="adi">Photo Information</div>
                        Below we have listed some special Independence day background which looks great with your photos you can use this background with your photos and show your cool photos to friends and family and you can thank us.
                    </div>
                </div>
            </div>
            <div class="cat">
                <p>CATEGORIES</p>
            </div>

           <div class="row">
                <div class="scroll">
                <div class="btn">
                    <div class="btn2">
                        HD BACKGROUNDS
                    </div>
                </div>
                <div class="btn">
                    <div class="btn2">
                        HD
                    </div>
                </div>
                <div class="btn">
                    <div class="btn2">
                        HD BACKGROUNDS
                    </div>
                </div>


            </div>
           </div>

        </div>

        <script>
		function myFunction () {


            $.ajax({
                url: '/like_count.php',
                type: 'PUT',
                headers: {
                    "Content-Type": "application/json"
                },
                data: JSON.stringify({"img_id" : $("#like-icon").data("img_id")}),
                success: function(data) {
                    // $(that).toggleClass('far fas colr'); fa-heart fas colr
                    $("#like-icon").removeClass().addClass('fa-heart fas colr like-animation'); //fa-heart fas colr
                    $("#like_count").html(parseInt($("#like_count").html())+1);
                    setTimeout(() => {
                        $("#like-icon").removeClass("like-animation");
                    }, 1000);

                    }
                });


        };

        function downloadImage(url){
            var link = document.createElement("a");
            link.href = url;
            link.download="";
            link.click();
            $.ajax({
                url: '/download_count.php',
                type: 'PUT',
                headers: {
                    "Content-Type": "application/json"
                },
                data:  JSON.stringify({"img_id" : $("#like-icon").data("img_id")}),
                success: function(data) {
                    

                    $("#download_count").html(parseInt($("#download_count").html())+1);
                    
                    },

                    error: function (jqXHR, exception) {
                        console.log(jqXHR);
                        console.log(exception);
                    }
                });

        }
</script>
    </body>
</html>