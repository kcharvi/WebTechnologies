<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            div {
                background: rgb(131, 15, 15);
                color: aliceblue;
                width: 300px;
                height: 400px;
                position: relative;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 5px 5px 5px 5px;
                margin: auto;
            }
            button {
                background-color: orange;
                padding: 5px 5px 5px 5px;
                border-radius: 5px;
            }
        </style>
        <script>
            function m1() {
                var x = document.getElementById("t1");
                var y = document.getElementById("t2");
                var i = document.getElementById("t3");
                var j = document.getElementById("t4");
                if (x.value == "" || y.value == "" || i.value == "" || j.value == "") {
                    alert("All fields are empty");
                    return false;
                } else if (j.value.length > 140) {
                    alert("Message content more than 140");
                    return false;
                } else {
                    alert("validation successful");
                }
            }
        </script>
    </head>
    <body>
        <div>
            <h1>Get in Touch!</h1>
            <pre>
        <form onsubmit="return m1()" >
        Name  <input type="text" id="t1"/><br><br>
        Email  <input type="email" id="t2"/><br><br>
        Phone  <input type="number" id="t3"/><br><br>
        Message  <textarea rows="3" cols="15" id="t4"></textarea><br><br>
            <button type="submit" id="t3">Submit</button><br><br>
        </form>
        </pre>
        </div>
    </body>
</html>
