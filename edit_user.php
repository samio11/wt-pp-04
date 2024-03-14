<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<?php
include './db_connection.php';
$id = $_REQUEST['id'];
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $role = $_REQUEST['role'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $result = $mydb->updateUser($conobj,"pp_tb_04",$id,$name,$email,$password,$role,$address,$phone);
    if($result){
        echo "successfully updated";
        header('location: show_data.php');
    }
    else{
        echo "failed to update";
    }
}

?>
<body>
    <form method="POST">
        <fieldset>
            <legend>Update User</legend>
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name"></td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td><label for="email">email:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td><label for="pass">Password:</label></td>
                    <td><input type="password" id="pass" name="password"></td>
                    <td>
                    <td>
                       
                    </td>
                    </td>
                </tr>

                <tr>
                    <td>Select your Role</td>
                    <td>
                        <select id="role" name="role">
                            <option value="Healthcare Administrator">Healthcare Administrator</option>
                            <option value="Clinic Manager">Clinic Manager</option>
                            <option value="Health Information Manager">Health Information Manager</option>
                            <option value="Director of Operations">Director of Operations</option>
                            <option value="Chief Medical Officer">Chief Medical Officer</option>
                        </select>
                    </td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td>Address:-</td>
                    <td>
                        <textarea id="address" name="address" rows="4" cols="50"></textarea>
                    </td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>
                        <input type="text" id="phone" name="phone">
                    </td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="term" id="term"></td>
                    <td><label for="term">I agree to the terms and conditions</label></td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td>
                         <input type="submit" value="Submit" name="submit">
                    </td>
                    <td>
                        <input type="reset" value="reset">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</body>

</html>