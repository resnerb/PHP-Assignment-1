<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Login Page</title>
</head>
<body>

<form action="content1.php" method="post">
Username: <input type="text" name="username"><br>
<input type="submit" value="Login">
</form>

<?php
    session_start();
    
    if (isset($_SESSION['user']))
    {
        header("location:content1.php");
    }
?>

</body>
</html>
