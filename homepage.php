<!DOCTYPE = html>
<html>
<head>
</head>
<body>
<?php
function displayAccessLevelInformation($accessLevel){
    if ($access_Level == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_Level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrive features</p>";
    }
}
?>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Fraser
 * Date: 02/11/2015
 * Time: 13:45
 */