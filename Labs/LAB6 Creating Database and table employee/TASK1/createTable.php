<?php
include 'createDB.php'
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedetails";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE employee (
empno INT(8) UNSIGNED PRIMARY KEY,
empname VARCHAR(30) NOT NULL,
dob DATE NOT NULL,
doj DATE NOT NULL,
designation VARCHAR(20) NOT NULL,
department VARCHAR(10) NOT NULL,
salary INT(8) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table employee created successfully\n";
  $conn->query($sql) === FALSE;
}

else {
$empno = $_POST["empno"];
$empname = $_POST["empname"];
$dob = $_POST["dob"];
$doj = $_POST["doj"];
$designation = $_POST["designation"];
$department = $_POST["department"];
$salary = $_POST["salary"];

$sql = "INSERT INTO employee (empno, empname, dob, doj, designation, department, salary)
 VALUES ('$empno', '$empname', '$dob', '$doj', '$designation', '$department', '$salary')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('successfull');
    location.replace('employee_index.html');</script>";
    // header("location:index.html");
  } 
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>