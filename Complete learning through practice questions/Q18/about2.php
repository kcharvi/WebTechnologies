<?php 
include "19bce7002_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
            rel="stylesheet"
        />
        <style>
            h1 {
                color: rgb(0, 0, 0);
            }
            span {
                color: red;
            }
            .con {
                background-color: rgb(197, 217, 235);
                color: black;
                padding: 0 10px;
                border-radius: 20px;
            }
            .in {
                padding: 6px 10px;
                margin: 4px 0;
                box-sizing: border-box;
                border-radius: 5px;
            }
            button {
                background-color: hsl(165, 83%, 38%); /* Green */
                border: none;
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Company Details Display</title>
    </head>
    <body align="center"  style="
            padding: 0 30%;
            font-family: 'Montserrat', sans-serif;
            background-color: hsl(192, 28%, 82%);
        ">
    <div>
       <center>
       <h1 align="center"><u> Company Details Access</u></h1>
    <form action="about.php" method="POST">
        <table border="0" cellpadding="10" cellspacing="5">
            <tr align="left">
                <th>Enter the Table Name to display details<span> *</span></th>
                <th>
                    <input name="tablename" id="tablename" type="text" required autocomplete="off"/>
                </th>
                <th>
                <button name="btn" type="submit" id="btn" class="btn3">Get Details</button>
                </th>
            </tr>
        </table>
    </form>
</div>
  </body>


<?php
if(isset($_POST['btn'])) {

$tablename = $_POST['tablename'];
$sql = "SELECT * from $tablename";
// $sql="SELECT * FROM `companyinfo`";
$connvar=mysqli_query($link, $sql);
$count=mysqli_num_rows($connvar);

    ?>
    <html>
	<body>
    <br>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>Company Name </td>
        <td>Producct </td>
        <td>Price </td>
        <td>Address </td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <tr>
        	<td><?php echo $row['compName']; ?></td>
            <td><?php echo $row['product']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
	</body>
</html>
    <?php
}
?>
