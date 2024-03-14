<?php

include './db_connection.php';

$name = $email = $password = $role = $address = $phone = $term = $hasErr ="";
$nameErr = $emailErr = $passwordErr = $roleErr = $addressErr = $termErr = $phoneErr = "";

if(isset($_REQUEST['submit'])){
    if(!preg_match("/^[A-Za-z\s\'-]+$/",$_REQUEST["name"]))
    {
        $hasErr=1;
        $nameErr= "please enter a valid Name";
    
    }
    else{
        $name= $_REQUEST['name'];
    }
    if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$_REQUEST["email"]))
    {
        $hasErr=1;
        $emailErr= "please enter a valid email address";
    
    }
    else{
        $email= $_REQUEST['email'];
    }
    if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$_REQUEST["password"]))
    {
        $hasErr=1;
        $passwordErr= "please enter a valid password";
    
    }
    else{
        $password= $_REQUEST['password'];
    }
    if(isset($_REQUEST['role'])){
     
       $role= $_REQUEST['role'];
    }
    else{
        $hasErr=1;
        $roleErr= "please select a role";
    }
    if(empty($_REQUEST['address']))
    {
        $hasErr=1;
        $addressErr= "please enter an address";
    }
    else{
        $address= $_REQUEST['address'];
    }
    if(!preg_match("/^\+88/",$_REQUEST["phone"]))
    {
        $hasErr=1;
        $phoneErr= "please enter a valid Phone Number";
    
    }
    else{
        $phone= $_REQUEST['phone'];
    }
    if(empty($_REQUEST['term']))
    {
        $hasErr=1;
        $termErr= "please Accept our Terms of Service";
    }
    else{
        $term= $_REQUEST['term'];
    }

    if($hasErr === 1)
    {
        echo "please enter all the credentials";
    }
    else{
        $mydb = new model();
        $conobj= $mydb->OpenConn();
       $result = $mydb->addUser($conobj,"pp_tb_04",$_REQUEST["name"],$_REQUEST["email"],$_REQUEST["password"],$_REQUEST["role"],$_REQUEST["address"],$_REQUEST["phone"]);
       if($result){
           echo "successfully inserted";
           header('location: show_data.php');
       }
       else{
           echo "failed to insert";
       }
    }

}

?>