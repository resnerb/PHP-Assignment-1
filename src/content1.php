<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>GET/POST Data</title>
</head>
<body>
<?php
    
    $username = $_POST["username"];
    echo $username;
    if ($username === '' || !isset($username))
    {
        echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
    }
    else
    {
        echo 'Hello ' . $username . ' you have visited this site ' . $numVisits . ' times before. Click here to logout.';
    }
    
?>
</body>
</html>
