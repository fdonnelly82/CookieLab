<!DOCTYPE = html>
<html>
<head></head>
<body>
    <form action = "login.php">
        Username:<br>
        <input type = "text" name = "userid">
        <br>
        Password: <br>
        <input type = "password" name = "psw">
    </form>
    <?php
    $username = "Mike";
    $password = "mysecretpassword";

    function loggin($username, $password) {
        if($username == $username and $password == $password) {
            setcookie('access_level' , 'standarduser');

        }
    }


    ?>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Fraser
 * Date: 02/11/2015
 * Time: 13:28
 */