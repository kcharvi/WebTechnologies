<html>
    <head>
        <title>Two Number Operation</title>
    </head>
    <body>

    <form method="POST" action="Q3 two input nums and operator.php">
            Number 1: <input type="number"  name="n1"> 
            Number 2: <input type="number"  name="n2">
            <br>
            <br>
            <!-- <label for="operator">Operator:</label> -->
            Operator: <select name="operator">
                <option value="">---Select---</option>
                <option name="add" >+</option>
                <option name="sub" >-</option>
                <option name="mul" >*</option>
                <option name="div" >/</option>
            </select>
            <br>
            <br>
            <button type="submit" name="perform">Submit</button>
            <br>
            <br>
        </form>
    <?php    
        if(isset($_POST['perform'])){  
            $n1 = $_POST['n1'];  
            $n2 = $_POST['n2']; 
            if(!empty($_POST['operator'])) {
                $selected = $_POST['operator'];
                echo "You have selected \" ".$selected." \"<br>";
                $res=0; 
                if($selected=="+"){
                    $res=$n1+$n2;
                }
                else if($selected=="-"){
                    $res=$n1-$n2;
                }
                else if($selected=="*"){
                    $res=$n1*$n2;
                }
                else if($selected=="/"){
                    $res=$n1/$n2;
                }       
                echo "Result is: ".$res;  
            } 
        }  
    ?>  
        
    </body>
</html>
