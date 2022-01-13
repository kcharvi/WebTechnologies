
        <?php
        
            //POST METHOD
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['submit'])){ 
                    // echo '<script>alert("Data Sent Successfully through POST method!")</script>';
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
                        echo "You are a  <b>".$gender."</b>"; 
                    }
                    echo "\n and \n";
                    //Quote
                    if(!empty($_POST['quote'])) {  
                        $quote = $_POST['quote'];  
                        echo 'Your Quote is: ' . $quote;  
                    }  
                    echo "<br>";
                    //Education
                    if(!empty($_POST['Education'])) {  
                        $edu = $_POST['Education'];  
                        echo 'You Passed: <b>' . $edu.'</b>';  
                    }  
                    echo "<br>";
                    //Hobbies
                    if(!empty($_POST['check_list'])) {
                        echo "Your hobbies are: ";
                        foreach($_POST['check_list'] as $selected) {
                        echo "<p>".$selected ."</p>";
                        }
                    }
                    echo "<br>";
                }  
            }


            //GET METHOD
            if($_SERVER['REQUEST_METHOD']=='GET'){
                if(isset($_GET['submit'])){ 
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
                        echo "You are a  <b>".$gender."</b>"; 
                    }
                    echo "\n and \n";
                    //Quote
                    if(!empty($_GET['quote'])) {  
                        $quote = $_GET['quote'];  
                        echo 'Your Quote is: ' . $quote;  
                    }  
                    echo "<br>";
                    //Education
                    if(!empty($_GET['Education'])) {  
                        $edu = $_GET['Education'];  
                        echo 'You Passed: <b>' . $edu.'</b>';  
                    }  
                    echo "<br>";
                    //Hobbies
                    if(!empty($_GET['check_list'])) {
                        echo "Your hobbies are: ";
                        foreach($_GET['check_list'] as $selected) {
                        echo "<p>".$selected ."</p>";
                        }
                    }
                    echo "<br>";
                }  
            }

            //REQUEST METHOD
            if($_SERVER['REQUEST_METHOD']=='POST' || $_SERVER['REQUEST_METHOD']=='GET'){
                if(isset($_REQUEST['submit'])){ 
                    echo "<h1>Using REQUEST VARIABLE</h1> <br>";
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
                        echo "You are a  <b>".$gender."</b>"; 
                    }
                    echo "\n and \n";
                    //Quote
                    if(!empty($_REQUEST['quote'])) {  
                        $quote = $_REQUEST['quote'];  
                        echo 'Your Quote is: ' . $quote;  
                    }  
                    echo "<br>";
                    //Education
                    if(!empty($_REQUEST['Education'])) {  
                        $edu = $_REQUEST['Education'];  
                        echo 'You Passed: <b>' . $edu.'</b>';  
                    }  
                    echo "<br>";
                    //Hobbies
                    if(!empty($_REQUEST['check_list'])) {
                        echo "Your hobbies are: ";
                        foreach($_REQUEST['check_list'] as $selected) {
                        echo "<p>".$selected ."</p>";
                        }
                    }
                    echo "<br>";
                }  
            }
        ?>