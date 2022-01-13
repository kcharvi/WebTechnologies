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
    <form action="remove.php" method="POST">
        <table border="0" cellpadding="10" cellspacing="5">
            <tr align="left">
                <th>Enter the Company Name to remove details<span> *</span></th>
                <th>
                    <input name="compname" id="compname" type="text" required autocomplete="off"/>
                </th>
            </tr>
            <tr>
                <th>Enter the Address of that Company Name to remove details<span> *</span></th>
                <th>
                    <input name="compAddress" id="compAddress" type="text" required autocomplete="off"/>
                </th>
                
            </tr>
            <tr><th>
                <button name="btn" type="submit" id="btn" class="btn3">Get Details</button>
                </th></tr>
        </table>
    </form>
</div>
<?php
            if(isset($_POST['btn'])) 
            {
                $CName = $_POST['compname'];
                $Caddress = $_POST['compAddress'];

                $testing= "DELETE FROM companyinfo WHERE Compname='$CName' AND address='$Caddress'";
                "DELETE from `companyinfo` WHERE address = $Caddress AND compName = $CName";
                $flag = mysqli_query($link,$testing); // $conn is from "19bce7002_connect.php" connection variable
                if($flag)
                {
                    echo "Sucess";
          
                }
                else {
                    echo "Failed";
                }
            }
        ?>

  </body>

