<?php 


$today = date("Ymd");

//check to make sure $date is not negative

if ($today < "20170907") {
	$date = strtotime("20170907");
} else {
	$date = strtotime(date("Y/m/d h:i:sa"));
}

// MANUAL DATE OVERRIDE IF NEEDED
$date = strtotime("09/15/2017 15:30:00");

$season_start = strtotime("09/05/2017");

//$weekmarker variable will return current NFL week value

$datetest = (($date - $season_start)/"604800");

//$weekmarker = ceil($datetest);

$kickoff_marker = $weekmarker - $datetest;

//set variable to identify previous week

if ($weekmarker = 1) {
	
	$last_weekmarker = 1;

} else {

	$last_weekmarker = $weekmarker - 1;

}

echo $weekmarker;
echo $weekmarker;
echo $weekmarker;
echo '<br>';
echo $kickoff_marker;
echo '<br>';
echo ceil($datetest);
echo '<br>';
echo $date;
echo '<br>';
echo $season_start;
echo '<br>';
echo $datetest;
echo '<br>';
echo date('m/d/y H:i:s', $date);
echo '<br>';
// echo date ()




?>