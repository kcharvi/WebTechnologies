<?php 
include '19bce7002 connect.php';
?>

<html lang="en" style="zoom: 150%">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DETAILS</title>
        <style>
            body {
                background-color: rgb(213, 238, 238);
            }
            #btn {
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #2ecc71;
                padding: 14px 40px;
                outline: none;
                border-radius: 12px;
                transition: 0.25s;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>
                Welcome
                <span style="color: rgb(201, 0, 60)"
                    ><?php 
$user =$_SESSION['user'];
$sql = "SELECT * FROM userinfo where username = '$user'";
$connvar=mysqli_query($link, $sql);
?></span
                >
            </h1>
        </center>
        <br />
        <table border="1" align="center" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <td>UserName</td>
                    <td>Password</td>
                    <td>Country</td>
                    <td>Contact</td>
                </tr>
            </thead>
            <tbody>
                <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br />
        <!-- <form action="logout.php" method="POST">
            <center>
                <input name="btn" type="submit" id="btn" class="btn2" value="Logout" />
            </center>
        </form> -->
    </body>
</html>
