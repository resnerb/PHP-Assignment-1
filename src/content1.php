<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>GET/POST Data</title>
</head>
<body>
<?php
    if (isset($_SESSION['user']))
    {
        $_SESSION['numVisits']++;
        echo 'Hello ' . $_SESSION['user'] . ' you have visited this site ' . $_SESSION['numVisits'] . ' times before. Click <a href="logout.php">here</a> to logout.';
    }
    else
    {
        $username = $_POST["username"];
        
        if ($username === '' || !isset($username))
        {
            echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
        }
        else
        {
            $_SESSION['user'] = $username;
            $_SESSION['numVisits'] = 0;
            echo 'Hello ' . $_SESSION['user'] . ' you have visited this site ' . $_SESSION['numVisits'] . ' times before. Click <a href="logout.php">here</a> to logout.';
        }
    }
    
    
?>
</body>
</html>
