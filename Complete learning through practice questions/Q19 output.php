<?php          
            //POST METHOD
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['submit'])){ 
                    
                    //Number1 
                    if(!empty($_POST['n1'])){
                        $num = $_POST['n1'];
                        $sum=0; $rem=0;  
                        for ($i =0; $i<=strlen($num);$i++){  
                            $rem=$num%10;  
                            $sum = $sum + $rem;  
                            $num=$num/10;  
                        }  
                        echo "Sum of digits is $sum";  
                    }
                    echo "<br>";
                    //Number2
                    if(!empty($_POST['n2'])) {
                        $num = $_POST['n2']; 
                        $revnum = 0;  
                        while ($num > 1){  
                            $rem = $num % 10;  
                            $revnum = ($revnum * 10) + $rem;  
                            $num = ($num / 10);   
                        }  
                        echo "Reverse number is: $revnum";  
                    }
                    echo "\n and \n";
                    //Name to uppercase
                    if(!empty($_POST['n'])) {  
                        $n = $_POST['n'];  
                        echo "<h1>".strtoupper($n)."</h1>";  
                    }  
                    echo "<br>";
                    //Address
                    if(!empty($_POST['address'])) {  
                        $address = $_POST['address'];  
                        echo 'The length of the address is: '.strlen($address);  
                    }  
                    echo "<br>";
                    
                }  
            }
        ?>