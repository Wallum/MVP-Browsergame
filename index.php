<head>
  <meta http-equiv="refresh" content="15">
</head>


<?php
include 'includes/header.php';








// ARRAY LOADING INIT
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<font size=6><b>TESTING</b></font>";
echo "<br>";
echo time();
echo "<br><br>";
$read_users = mysqli_query($conn, "SELECT * FROM users");


if (mysqli_num_rows($read_users) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($read_users)) {
        echo "id: ".$row['id']."<br>";
        echo "name: <b>".$row['username']."</b><br>";
		echo "<br>";
    }
} else {
    echo "0 results";
}




/*
// LOGIN CHECK
echo "<br><br>";
if (!isset($_SESSION['id'])) {
	echo "<a href=\"login.php\">LOGIN</a>";
	
}
else {
	echo "ya bastard beat me!";
}
*/











// echo "<a href=\"resource_update.php\">CLICK</a>";


/*
$con=mysqli_connect("localhost","","","test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//test id
$id = 1;
$time = time();

$result = mysqli_query($con,"SELECT * FROM players WHERE id = $id");
$row = mysqli_fetch_array($result);
$time2 = $row['last_time'];
$hour = floor(($time - $time2)/3600);
echo $hour;
echo "<br><br>";

//include 'resourceupdatehour1.php';
//include 'resourceupdate.php';
//include 'resourceupdatehour2.php';



include 'RSupdate.php';
echo "<br><br>";


/////////////////////////////////////////////////////////////////////
//DISPLAY BASIC STATS
/////////////////////////////////////////////////////////////////////
$result2 = mysqli_query($con,"SELECT * FROM players WHERE id = $id");
$row2 = mysqli_fetch_array($result2);

echo "hello ".$row2['name']."<br>";
echo "<u>you have:</u><br>";
echo $row2['metal']." metal and make ".$row2['metal_net']." per hour<br>";
echo $row2['creds']." creds and make ".$row2['creds_net']." per hour<br>";
echo $row2['crystal']." crystal and make ".$row2['crystal_net']." per hour<br>";
echo $row2['energy']." energy and make ".$row2['energy_net']." per hour<br>";
echo $row2['alloy']." alloy and make ".$row2['alloy_net']." per hour<br>";
echo "<br>";

/////////////////////////////////////////////////////////////////////
//DISPLAY STATS
/////////////////////////////////////////////////////////////////////
echo "<div style=\"width:100%;height:150px\">";
include 'includes/can_research.php';
include 'includes/have_researched.php';
include 'includes/have_built.php';
include 'includes/planets.php';
echo "</div>";



$result4 = mysqli_query($con,"SELECT * FROM players WHERE id = $id");
$row4 = mysqli_fetch_array($result4);





$time = time();
echo $time;
echo "<br>";
echo $row4['last_time'];
echo "<br>";
echo "<br>";
$time2 = 1410908931;
$tdiff = $time - $time2;
echo $tdiff;
echo "<br>";
$tround = $tdiff/3600;
echo $tround;
echo "<br>";
echo floor($tround);





mysqli_close($con);


*/
?>