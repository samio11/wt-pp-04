<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>show Data</title>
</head>
<body>
  <table>
    <td>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Role</th>
      <th>Phone</th>
      <th>Operation</th>
    </td>
    <?php
    include "./db_connection.php";
    $mydb1 = new model();
    $connobj = $mydb1->openConn();
    $result = $mydb1->showUser($connobj, "pp_tb_04");
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $role = $row['role'];
        $phone = $row['phone'];
        echo
        '<tr>
  <td>' . $name . '</td>
  <td>' . $email . '</td>
  <td>' . $password . '</td>
  <td>' . $role . '</td>
  <td>' . $phone . '</td>
  <td><a href="edit_user.php?id=' . $id . '">Edit</a></td>
  <td><a href="delete_user.php?id=' . $id . '">Delete</a></td>
</tr>';
      }
    }
    ?>
  </table>
</body>

</html>