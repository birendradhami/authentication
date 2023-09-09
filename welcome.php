<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>Welcome</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body{ font: 14px sans-serif; text-align: center; }
        </style>
    </head>
    <body>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome</h1>
        
            <a href="reset-password.php" class="btn btn-primary">Reset</a><br><br>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
        
    </body>
</html>