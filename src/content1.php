<?php
    // Start the session
    session_start();
    //echo "Server parameters: " . json_encode($_SERVER) . "<br>";
    //echo "Server Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
    //echo "Server HTTP Referer: " . $_SERVER['HTTP_REFERER'] . "<br>";
    if(isset($_SESSION['user']))
    {
        $_SESSION['numVisits']++;
    }
    else
    {
        // We have been assured that the only way we will get to this page with a
        // request method of POST is via the login.php page
        if ($_SERVER['REQUEST_METHOD'] !== "POST")
        {
            // Since the user is not correctly logged in, then redirect back to login page
            echo "You must be logged in to access this page! You will be redirected to the login page!";
            // TODO Need to figure out how to make the redirection delay so the user can
            // see the above comment about why they are being redirected
            sleep(3);
            header("location: login.php");
            exit();
        }
    }
    //echo "Session parameters: " . json_encode($_SESSION) . "<br>";
    ?>
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
        // Make numVisits into an integer by adding a zero to it
        $nv = $_SESSION['numVisits'] + 0;
        if ($nv == 1)
        {
            echo 'Hello ' . $_SESSION['user'] . ' you have visited this site ' . $_SESSION['numVisits'] . ' time before. Click <a href="logout.php">here</a> to logout.<br>';
        }
        else
        {
            echo 'Hello ' . $_SESSION['user'] . ' you have visited this site ' . $_SESSION['numVisits'] . ' times before. Click <a href="logout.php">here</a> to logout.<br>';
        }
        echo 'If you want to be directed to the content2 page, click <a href="content2.php">here</a>!';
        
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
            echo 'Hello ' . $_SESSION['user'] . ' you have visited this site ' . $_SESSION['numVisits'] . ' times before. Click <a href="logout.php">here</a> to logout.<br>';
            echo 'If you want to be directed to the content2 page, click <a href="content2.php">here</a>!';
        }
    }
    ?>
</body>
</html>