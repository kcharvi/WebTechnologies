<html style="zoom: 80%;">
<title>19BCE7002 - Task 2</title>

<?php
error_reporting(E_ERROR | E_PARSE);
echo "<center><h2>Contents in the file BEFORE Updating</h2></center>";

$infos = array();
$stdcsv = "Student_19bce7002.csv";
if (($flag = fopen($stdcsv, "r")) !== FALSE) {
    echo '<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>';
    echo '<th>ID</th> <th>Name</th> <th>Reg No.</th> <th>CGPA</th>';
    echo '</thead>';
    while (($data = fgetcsv($flag, 0, ",")) !== FALSE) {
        echo '<tr>
            <td>' . $data[0] . '</td>
            <td>' . $data[1] . '</td>
            <td>' . $data[2] . '</td>
            <td>' . $data[3] . '</td>
        </tr>';
        $infos[] = $data[0] . ',' . $data[1] . ',' . $data[2] . ',' . $data[3];
    }
    echo '</tbody></table>';
    fclose($flag);
    echo "<br><br><hr><br><br>";
}
?>

<?php
$appendCol = array();
if (($tmpflag = fopen("Student_19bce7002.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($tmpflag, 1000, ",")) !== FALSE) {
       $data[] = 'SCOPE';
        $appendCol[] = $data;
    }
    fclose($tmpflag);
}

$tmpflag = fopen('Student_19bce7002.csv', 'w');

foreach ($appendCol as $line) {
   fputcsv($tmpflag, $line);
}

fclose($tmpflag);
?>

<?php
error_reporting(E_ERROR | E_PARSE);
echo "<center><h2>Contents in the file AFTER Updating</h2></center>";

$infos = array();
$stdcsv = "Student_19bce7002.csv";
if (($flag = fopen($stdcsv, "r")) !== FALSE) {
    echo '<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>';
    echo '<th>ID</th> <th>Name</th> <th>Reg No.</th> <th>CGPA</th> <th>School</th>';
    echo '</thead>';
    while (($data = fgetcsv($flag, 0, ",")) !== FALSE) {
        echo '<tr>
            <td>' . $data[0] . '</td>
            <td>' . $data[1] . '</td>
            <td>' . $data[2] . '</td>
            <td>' . $data[3] . '</td>
            <td>' . $data[4] . '</td>
        </tr>';
        $infos[] = $data[0] . ',' . $data[1] . ',' . $data[2] . ',' .$data[3] . ',' . $data[4];
    }
    echo '</tbody></table>';
    fclose($flag);
    echo "<br><br><hr>";
}
?>
