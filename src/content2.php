<?php
    // Start the session
    session_start();
    if(!isset($_SESSION['user']))
    {
        // Since the user is not correctly logged in, then redirect back to login page
        header("location: login.php");
        exit();
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
<h2>This is the content2 page as part of the PHP Assignment</h2>
<br>
<br>
<p>When you are ready to return to the content1 page, click <a href="content1.php">here</a>!</p>
</body>
</html>
