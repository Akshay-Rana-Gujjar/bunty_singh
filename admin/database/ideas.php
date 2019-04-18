<?php
$db3 = mysqli_connect('localhost', 'admin_root', 'admin_root', 'admin_root');

$sql3 = "SELECT * FROM data ORDER BY id DESC;";
$result3 = mysqli_query($db3, $sql3);
$resultCheck3 = mysqli_num_rows($result3);
?>