        <?php          
            //POST METHOD
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['submit'])){ 
                    //echo '<script>alert("Data Sent Successfully using post method!")</script>';
                    echo "<h1>Using POST VARIABLE</h1> <br>";
                    //Name 
                    if(!empty($_POST['fname']) || !empty($_POST['lname'])){
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname']; 
                        echo "Hello...,<b>".$fname." ".$lname."</b>";
                    }
                    echo "<br>";
                    //Gender
                    if(!empty($_POST['radio'])) {
                        $gender = $_POST['radio']; 
                        echo "You are   <b>".$gender."</b>"; 
                    }
                    echo "\n and \n";
                    //Place of birth
                    if(!empty($_POST['birthplace'])) {  
                        $birthplace = $_POST['birthplace'];  
                        echo 'Your birthplace is: ' . $birthplace;  
                    }  
                    echo "<br>";
                    //Nationality
                    if(!empty($_POST['nationality'])) {  
                        $nat = $_POST['nationality'];  
                        echo 'Your nationality: <b>' . $nat.'</b>';  
                    }  
                    echo "<br>";
                    
                }  
            }

            //GET METHOD
            if($_SERVER['REQUEST_METHOD']=='GET'){
                if(isset($_GET['submit'])){ 
                    // echo '<script>alert("Data Sent Successfully using post method!")</script>';
                    echo "<h1>Using GET VARIABLE</h1> <br>";
                    //Name 
                    if(!empty($_GET['fname']) || !empty($_GET['lname'])){
                        $fname = $_GET['fname'];
                        $lname = $_GET['lname']; 
                        echo "Hello...,<b>".$fname." ".$lname."</b>";
                    }
                    echo "<br>";
                    //Gender
                    if(!empty($_GET['radio'])) {
                        $gender = $_GET['radio']; 
                        echo "You are   <b>".$gender."</b>"; 
                    }
                    echo "\n and \n";
                    //Place of birth
                    if(!empty($_GET['birthplace'])) {  
                        $birthplace = $_GET['birthplace'];  
                        echo 'Your birthplace is: ' . $birthplace;  
                    }  
                    echo "<br>";
                    //Nationality
                    if(!empty($_GET['nationality'])) {  
                        $nat = $_GET['nationality'];  
                        echo 'Your nationality: <b>' . $nat.'</b>';  
                    }  
                    echo "<br>";
                    
                }  
            }

            //REQUEST METHOD
            if($_SERVER['REQUEST_METHOD']=='POST' || $_SERVER['REQUEST_METHOD']=='GET'){
                if(isset($_REQUEST['submit'])){ 
                    echo '<script>alert("Data Sent Successfully using get method!")</script>';
                    //Name 
                    if(!empty($_REQUEST['fname']) || !empty($_REQUEST['lname'])){
                        $fname = $_REQUEST['fname'];
                        $lname = $_REQUEST['lname']; 
                        echo "Hello...,<b>".$fname." ".$lname."</b>";
                    }
                    echo "<br>";
                    //Gender
                    if(!empty($_REQUEST['radio'])) {
                        $gender = $_REQUEST['radio']; 
                        echo "You are   <b>".$gender."</b>"; 
                    }
                    echo "\n and \n";
                    //Place of birth
                    if(!empty($_REQUEST['birthplace'])) {  
                        $birthplace = $_REQUEST['birthplace'];  
                        echo 'Your birthplace is: ' . $birthplace;  
                    }  
                    echo "<br>";
                    //Nationality
                    if(!empty($_REQUEST['nationality'])) {  
                        $nat = $_REQUEST['nationality'];  
                        echo 'Your nationality: <b>' . $nat.'</b>';  
                    }  
                    echo "<br>";
                    
                }  
            }
        ?>