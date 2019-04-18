<?php
require_once('database/ideas.php');
?>
<?php
while($row = mysqli_fetch_assoc($result3)){
    $img = "../img/".$row['thumb'];
    $id = $row['id'];
    echo $id;
    echo "<br>";
    echo "<br>";
    echo "<img src='$img'>";
}
?>