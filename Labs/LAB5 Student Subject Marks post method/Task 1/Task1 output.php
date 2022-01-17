<html lang="en">
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
            rel="stylesheet"
        />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Student Results</title>
    </head>
    <body align="center"  style="
            padding: 0 30%;
            font-family: 'Montserrat', sans-serif;
            background-color: hsl(192, 28%, 82%);
        ">
        <h1 align="center"><u> Student Details </u></h1>
        <table border="5" align="center" cellpadding="10" cellspacing="0">
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Total Marks</th>
                <th>Percentage</th>
                <th>Result</th>
            </tr>
<?php
$sub1 = $_POST['s1'];
$sub2 = $_POST['s2'];
$sub3 = $_POST['s3'];
$maxMarks = 300;
$total = $sub1 + $sub2 + $sub3;
$percentage = ($total/$maxMarks) * 100;
if($percentage >= 90){ 
    $result = "First Class"; 
} 
else if($percentage >= 80 && $percentage < 90){
    $result = "Second Class"; 
} 
else if($percentage >= 70 && $percentage < 80){ 
    $result = "Third Class"; 
} 
else if($percentage >= 50 && $percentage < 70){ 
    $result = "Fourth Class"; 
}
else{ 
    $result = "Failed"; 
} 
?>
            <tr>
                <td><?php echo $_POST['regno']; ?></td>
                <td><?php echo $_POST['sname']; ?></td>
                <td><?php echo $total ?></td>
                <td><?php echo $percentage ?></td>
                <td><?php echo $result ?></td>
            </tr>
        </table>
        <br><br>
        <center><span> <b> DONE BY : 19BCE7002 </b></span></center>
    </body>
</html>
