<?php
include './db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="input" id="">
       <input type="submit" value="Search" name="submit">
    </form>
    <div>
        <table>
            <?php
             $mydb = new model();
             $conobj= $mydb->OpenConn();
              if(isset($_REQUEST['submit']))
              {
                    $search = $_REQUEST['input'];
                    $sql = "SELECT * FROM pp_tb_04 WHERE id = '$search' or name = '$search' or email = '$search'";
                    $result = mysqli_query($conobj, $sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        echo '<thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Role</th>
                      <th>Address</th>
                      <th>Phone</th>                
                    </tr>
                    </tr>
                    </thead>
                    ';
                    $row = mysqli_fetch_assoc($result);
                    echo '<tbody>
                    <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['password'].'</td>
                    <td>'.$row['role'].'</td>
                    <td>'.$row['address'].'</td>
                    <td>'.$row['phone'].'</td>
                    </tr>
                    </tbody>
                    ';

                    }
                    else{
                        echo '<tr>
                        <td>No Data Found</td>
                        </tr>';
                    }
              }
            ?>
        </table>
    </div>
</body>
</html>