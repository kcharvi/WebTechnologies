<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Student_19bce7002.csv"');
$data = array(
        '1,K Charvi,19BCE7002,9.63',
        '2,Harry Potter,19BCD7243,9.24',
        '3,Rex Reddi,19BCN7122,9.64',
        '4,Bhanu Chakra,19BCE7192,9.46',
        '5,Tarun,19BCN7002,9.52',
        '6,Anchal Daga,19BCE7375,9.10',
        '7,Samruddhi Khairnar,19BCE7686,9.20'
);

$fileopen = fopen('php://output', 'wb');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fileopen, $val);
}
fclose($fileopen);
?>