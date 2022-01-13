
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['submit'])){ 
                    //EMPID
                    if(!empty($_POST['empid'])){
                        $eid=$_POST['empid'];
                        $patt="/^[a-z A-Z]{4}[0-9]{4}$/";
                        $chkk=preg_match_all($patt,$eid);
                        if($chkk && strlen($eid)==8)	
                            echo "Your Employee id: $eid is valid!";
                        else
                            echo "Incorrect EmpID: $eid";
                    }
                    echo "<br><br>";
                    //Salary
                    if(!empty($_POST['salary'])){
                        $sal=$_POST['salary'];
                    	$sal_len=strlen($sal);
                        $flag=preg_match ("/^[0-9]*$/", $sal);
                        if ($flag && $sal_len>=4 && $sal_len<=6)
		                    echo "Your Salary : $sal is valid!";
                        else echo "Incorrect Salary: $sal";
	                }
                    echo "<br><br>";
                    //EName
                    if(!empty($_POST['ename'])) {  
                        $e_name = $_POST['ename'];
                        $chk="/[A-Z]^/";
                        $flag=preg_match("/^[a-z A-z]*$/", $e_name);
                        if($flag && $chk)
                            echo "Your EName is $e_name is valid";
                        else echo "Incorrect EName: $e_name";
                    }     
                    echo "<br><br>";
                    //Address
                    if(!empty($_POST['address'])) {  
                        $address = $_POST['address'];  
                        echo "Length of Address is: ".strlen($address);  
                    }  
                    echo "<br><br>";
                }  
            }
        ?>