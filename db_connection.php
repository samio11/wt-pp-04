<?php
class model{
    function openConn(){
        $conn = new mysqli("localhost","root","","pp_db_04");
        return $conn;
    }
    function addUser($conn,$table,$name,$email,$password,$role,$address,$phone){
      $insertSql = "INSERT INTO $table(name,email,password,role,address,phone) VALUES ('$name','$email','$password','$role','$address','$phone')";
      $result = $conn->query($insertSql);
      return $result;
    }
    function showUser($conn,$table){
      $showQuery = "SELECT * FROM $table";
      $result = $conn->query($showQuery);
      return $result; 
    }
    function deleteUser($conn,$table,$id){
      $deleteSql = "DELETE FROM $table WHERE id=$id";
      $result = $conn->query($deleteSql);
      return $result;
    }
    function updateUser($conn,$table,$id,$name,$email,$password,$role,$address,$phone){
      $updateSql = "UPDATE $table SET name='$name',email='$email',password='$password',role='$role',address='$address',phone='$phone' WHERE id=$id";
      $result = $conn->query($updateSql);
      return $result;
    }
}
?>