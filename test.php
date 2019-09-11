<?php


include 'conn.php';

$tt = 4;
//$poooopopood = mysqli_query($conn,"SELECT id FROM buildings WHERE 4 EXISTS (SELECT upgrade_id FROM buildings)");
$poooopopood = mysqli_query($conn,"SELECT id FROM buildings WHERE EXISTS (SELECT upgrade_id FROM buildings WHERE upgrade_id = 4)");
$wewewewwwwe = mysqli_fetch_assoc($poooopopood);
echo count($wewewewwwwe)."<br>";
echo $wewewewwwwe['id'];


?>