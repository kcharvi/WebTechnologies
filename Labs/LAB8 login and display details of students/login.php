
<?php 
include "19bce7002_connect.php";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form class="box" name="student" method="post" action="validate.php">
        <h1>Login</h1>
        <input type="text" name="email" id="email" autocomplete="off" required placeholder="Email ID">
        <input name="password" id="password" type="password" required placeholder="Password">
        <input name="btn" type="submit" id="btn" class="btn3" value="Login"> 
    </form>

</body>
</html>
