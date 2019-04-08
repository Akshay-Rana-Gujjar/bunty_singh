<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



$db = "";
if (file_exists("./constants.php")) {
    require "./constants.php";
    $db = mysqli_connect($servername, $username, $password, $dbname);
}else{
    $db = mysqli_connect('localhost', 'admin_imagedb', 'admin_imagedb', 'admin_imagedb');
}
// parse_str(file_get_contents("php://input"),$_PUT);
$image_id = json_decode(file_get_contents("php://input"))->img_id;

if(!$image_id){
    function siteURL()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'].'/';
        return $protocol.$domainName;
    }
    
    $server_url = siteURL();
    header("Location: $server_url");
    exit();
}


$query = "UPDATE `tbl_images` SET `likes`= `likes` - 1 WHERE `id` = '".intval($image_id)."'";

if(mysqli_query($db, $query)){

    echo json_encode("{'result':'ok', 'message':'Like Counted!'}");
    http_response_code(200);

}else{
    echo json_encode("{'result':'error', 'message':'Like Not Counted!'}");
    http_response_code(500);
}

?>