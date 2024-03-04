<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<?php
include './logics.php';
?>
<body>
    <form method="POST">
        <fieldset>
            <legend>Admin:</legend>
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name"></td>
                    <td>
                        <?php
                          echo $nameErr;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">email:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                    <td>
                        <?php
                          echo $emailErr;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="pass">Password:</label></td>
                    <td><input type="password" id="pass" name="password"></td>
                    <td>
                    <td>
                        <?php
                          echo $passwordErr;
                        ?>
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
                        <?php
                          echo $roleErr;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Address:-</td>
                    <td>
                        <textarea id="address" name="address" rows="4" cols="50"></textarea>
                    </td>
                    <td>
                        <?php
                          echo $addressErr;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>
                        <input type="text" id="phone" name="phone">
                    </td>
                    <td>
                        <?php
                          echo $phoneErr;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="term" id="term"></td>
                    <td><label for="term">I agree to the terms and conditions</label></td>
                    <td>
                        <?php
                          echo $termErr;
                        ?>
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