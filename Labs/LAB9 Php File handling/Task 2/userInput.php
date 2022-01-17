<html style="zoom: 160%;">
<head><style>
            .btn , .btn3 {
                color: rgb(255, 255, 255);
                background-color: rgb(4, 12, 53);
                border-radius: 5px;
                padding: 5px;
            }
        </style>
        
<title>19bce7002 - Task 2</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
            rel="stylesheet"
        />
        </head>
  <body style="font-family: 'Montserrat', sans-serif;padding: 80px; background-color: rgb(209, 240, 240)">
    <div class="Data"> 
       <center>
          <h1>Upload Your File Here to Count the Bigrams in it.</h1>
          <hr>
    <form action="19bce7002_task2.php" method="POST">
        <table border="0" cellpadding="10" cellspacing="5">
            <tr align="left">
                <th>Upload your Text file<span> *</span></th>
                <th>
                    <input name="myfile" id="myfile" type="file" accept=".txt" required/>
                </th>
                <th>
                <button name="btn" type="submit" id="btn" class="btn3">Perform Task</button>
                </th>
            </tr>
        </table>
    </form>
</div>
  </body>
</html>