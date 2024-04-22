<php
session_start();

    if(!isset($_SESSION['username']));
    {   
        header("location:login.html");

    }
    elseif($_SESSION['usertype']!=='student');
    {
        header("location:login.html");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
</head>
<body>
    <h1>admin home</h1>

    <a href="logout.php">Logout</a>
</body>
</html>