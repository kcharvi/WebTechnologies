<?php 
include "19bce7002 connect.php";
?>
<?php
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
        $connection = mysqli_connect("localhost", "root", "","webtechtheory");
        if(!$connection){
            die("Could not connect:".mysqli_connect_error());
        }
        // $tablename = $_POST['tablename'];
        // $sql = "SELECT * from $tablename";
        $sql="SELECT `username` FROM `userinfo`";
        $connvar=mysqli_query($link, $sql);
        $count=mysqli_num_rows($connvar);
    ?>
<html>
	<body>
    <br>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>UserName </td>

        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <tr>
        	<td><?php echo $row['username']; ?></td>

        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
	</body>
</html>
<?php
        $connection->close();        
    // }
?>