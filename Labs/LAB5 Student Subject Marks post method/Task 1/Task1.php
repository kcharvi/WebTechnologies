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
                color: black;
            }
            span {
                color: red;
            }
            .con {
                background-color: white;
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
            .subBtn {
                background-color: #4caf50; /* Green */
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body style="
            padding: 0 30%;
            font-family: 'Montserrat', sans-serif;
            background-color: hsl(192, 28%, 82%);
        ">

<form action="Task1 output.php" method="POST">
       <center>
            <h1><u> Student Details </u></h1>
        </center>
        <div class="con">
            <pre style="font-family: 'Montserrat', sans-serif">
        <form onsubmit="return m1()" >
        <center>         Registration Number: <input name="regno" type="number" class="in" id="emp_no"/><br><br>
                      Student Name: <input name="sname" class="in" type="text" id="ename"/><br><br>
                   Subject 1 Marks: <input type="number" class="in" name="s1"><br><br>
                   Subject 2 Marks: <input type="number" class="in" name="s2"><br><br>
                   Subject 3 Marks: <input type="number" class="in" name="s3"><br><br>
                                           <input class="subBtn" type="submit" name="submit">
                                           </center>
                                    <center><span> <b> DONE BY : 19BCE7002 </b></span></center>
        </form>
        </pre>
        </div>
    


    
    
</body>
</html>