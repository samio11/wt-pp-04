<?php
$conn = new mysqli('localhost','root','','pp_db_04');
if($conn)
{
    echo "connected";
}
else{
    die(mysqli_error($conn));
}
?>