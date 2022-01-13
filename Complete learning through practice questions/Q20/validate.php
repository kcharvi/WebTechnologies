<?php 
include "19bce7002 connect.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$u=$_POST["uname"];
$password=$_POST["pwd"];

$sql = "SELECT * FROM userinfo where username = '$u' AND password= '$password'";
$query = mysqli_query($link,$sql);
$count=mysqli_fetch_array($query);

if ($count > 0) 
{
    $_SESSION['user']=$_POST['uname'];
    header("location:details.php");
} else {
    echo "<script>
    alert('Invalid User Credentials entered!!');
    window.location.replace('login.php');
    </script>";
}
}
?>

