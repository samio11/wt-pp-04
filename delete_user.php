<?php
include './db_connection.php';
$mydb2 = new model();
$connobj = $mydb2->openConn();
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    $result = $mydb2->deleteUser($connobj, "pp_tb_04",$id);
    if ($result) {
      echo "successfully deleted";
      header('location: show_data.php');
    }
    else {
      die(mysqli_error($connobj));
    }
}
?>