<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $connection = mysqli_connect("localhost", "root", "","webtechtheory");
        if(!$connection){
            die("Could not connect:".mysqli_connect_error());
        }
        if(isset($_POST['cName'])&& 
           isset($_POST['product'])&&
           isset($_POST['price'])&&
           isset($_POST['address'])
        ){
            $name=$_POST['cName'];
            $prod=$_POST['product'];
            $price=$_POST['price'];
            $addr=$_POST['address'];

            $sql = "INSERT INTO companyinfo (`compName`, `product`, `price`, `address`)
                    VALUES ('$name', '$prod', '$price', '$addr')";
            if ($connection->query($sql) === TRUE) {
                echo "<script> alert('successfull');
                location.replace('create.php');</script>";
            }
            else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        }
        $connection->close();        
    }
?>