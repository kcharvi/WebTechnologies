<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Functional Buttons</title>
        <script>
            function f1() {
                var x = document.getElementById("t1");
                x.value = x.value.toUpperCase();
                x.style.color = "red";
                x.style.backgroundColor = "pink";
            }
            function f2() {
                var x = document.getElementById("t1");
                x.style.color = "yellow";
                x.style.backgroundColor = "red";
                x.style.border = "blue dashed";
            }
            function f3() {
                var x = document.getElementById("t2").value;
                var y = document.getElementById("t3").value;
                var z = x + y;
                document.getElementById("t4").value = z;
            }
        </script>
    </head>

    <body>
        Test <input type="text" id="t1" />
        <button onclick="f1()">First</button>
        <button onclick="f2()">Second</button>
        <br />
        <br />
<!-- 
        Text 1 <input type="text" id="t2" /> Text 2 <input type="text" id="t3" /> Merged Text
        <input type="text" id="t4" />
        <button type="submit" onclick="f3()">Third</button> -->
    </body>
</html>
