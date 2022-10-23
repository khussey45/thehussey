<?php
$con=new mysqli('172.31.22.43','Kieren200409682','2YbUnxFPUA','Kieren200409682');
if(!$con){
      die(mysqli_error($con));

    $select_db = mysqli_select_db($con, 'registration');
    if(!$select_db){
        die("database selected failed" . mysqli_error($con));
    }
}
?>

