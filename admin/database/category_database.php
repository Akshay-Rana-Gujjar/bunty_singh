<?php
$db2 = mysqli_connect('localhost', 'admin_root', 'admin_root', 'admin_root');
$sql2 = "SELECT * FROM ideacat ORDER BY id DESC;";
$result2 = mysqli_query($db2, $sql2);
$resultCheck2 = mysqli_num_rows($result2);
?>