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
                color: rgb(255, 255, 255);
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
        <title>Company Form</title>
    </head>
    <body
        style="
            padding: 0 30%;
            font-family: 'Montserrat', sans-serif;
            background-color: rgb(6, 55, 99);
        "
    >
        <center>
            <h1><u> Company Input Form </u></h1>
        </center>
        <div class="con">
            <pre style="font-family: 'Montserrat', sans-serif">
        <form action="connectDB.php" method="post" >
                      Company Name <span>*</span>:   <input name="cName" class="in" type="text" id="cName"/><br><br>
                                        Product <span>*</span>: <input type="number" class="in" id="product" name="product"><br><br>
                                               Price <span>*</span>: <input type="number" class="in" id="price" name="price"><br><br>                                            
                                         Address <span>*</span>:  <input class="in" type="text" id="address" name="address"/><br>
                                                      <button class="btn1">Submit</button>  
                            </form>
        <center><span> <b> DONE BY : 19BCE7002 </b></span></center>
        </pre>
        </div>
    </body>
</html>
