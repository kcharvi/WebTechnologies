<?php 
include "19bce7002_connect.php";
?>
<?php
$email=$_POST["email"];
$password=$_POST["password"];

$sql = "SELECT name FROM mydetails where email = '$email' AND password= '$password'";
$query = mysqli_query($link,$sql);
$count=mysqli_fetch_array($query);

if ($count > 0) 
{
    $_SESSION['name']=$count['name'];
    $_SESSION['email']=$_POST['email'];
    header("location:details.php");
} else {
    echo "<script>
    alert('Invalid User Credentials entered!!');
    window.location.replace('login.php');
    </script>";
}
?>

