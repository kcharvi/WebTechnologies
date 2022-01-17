<?php
session_start();
include "Task2 Connect.php";
?>

<?php
  $userid=$_GET["userid"];
  $password=$_GET["password"]; ?>

    <h1 style="color: #03203C;"> Welcome <u style="color: red;"><?php echo $userid; ?></u> !!</h1>

  <?php
  $query = "SELECT * FROM `student details` where UserID = '$userid' AND Password= '$password'";
  $connvar=mysqli_query($link, $query);
  $count=mysqli_num_rows($connvar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 - 19BCE7002</title>
</head>
<body style="font-family: 'Montserrat', sans-serif;" align="center">
        <h1 align ="center" style="color: #03203C;">Student Details</h1>
        <table border="1" align="center" cellpadding="20" cellspacing="0">
        <thead>
        <tr>
        <td>Roll No</td>
        <td>Student Name </td>
        <td>Email </td>
        <td>User ID </td>
        <td>Mobile Number </td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <tr>
        	<td><?php echo $row['RNo']; ?></td>
            <td><?php echo $row['SName']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['UserID']; ?></td>
            <td><?php echo $row['Mobile Number']; ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
	</body>
</html>