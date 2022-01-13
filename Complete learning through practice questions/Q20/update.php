<?php 
include "19bce7002 connect.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$u=$_POST["uname"];
$password=$_POST["pwd"];
$newpwd = $_POST["newpwd"];
$sql = "SELECT * FROM userinfo where username = '$u' AND password= '$password'";
$query = mysqli_query($link,$sql);
$count=mysqli_fetch_array($query);

if ($count > 0) 
{

    $sqlupdate = "UPDATE `userinfo` SET password = '$newpwd' WHERE username='$u' AND password = '$password'";
    $queryupdate = mysqli_query($link,$sqlupdate);
    echo "<script>
    alert('User Credentials UPDATED!!');
    window.location.replace('homeUser.php');
    </script>";

} else {
    echo "<script>
    alert('Invalid User Credentials entered!!');
    window.location.replace('change.php');
    </script>";
}
}
?>

