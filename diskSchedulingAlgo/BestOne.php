./diskSchedulingAlgo/<?php
  $name = $_REQUEST["name"];
  $str = $_REQUEST["str"];
  $maximum = $_REQUEST["maximum"];
  $minimum = $_REQUEST["minimum"];
  // $algo = $_REQUEST["algo"];
  $str_arr = explode(",",$str);
  $n = $name;
  $s = $str_arr;
  $m = $maximum;
  $mi = $minimum;

  include './diskSchedulingAlgo/FCFS.php';
  $total1 = $total;

  $name = $n;
  $str_arr = $s;
  include './diskSchedulingAlgo/SSTF.php';
  $total2 = $total;

  $name = $n;
  $str_arr = $s;
  include './diskSchedulingAlgo/Scan.php';
  $total3 = $total;

  $name = $n;
  $str_arr = $s;
  include './diskSchedulingAlgo/CScan.php';
  $total4 = $total;

  $name = $n;
  $str_arr = $s;
  include './diskSchedulingAlgo/Look.php';
  $total5 = $total;

  $name = $n;
  $str_arr = $s;
  include './diskSchedulingAlgo/CLook.php';
  $total6 = $total;

  $min_total = min($total1, $total2, $total3, $total4, $total5, $total6);
  $name = $n;
  $str_arr = $s;
  if ($min_total == $total1) {
    $algo = "FCFS";
    include './diskSchedulingAlgo/FCFS.php';
    $dataPoints = array();
    $y = 10;
  	$x = $name;
  	array_push($dataPoints, array("x" => $x, "y" => $y));
  }
  elseif ($min_total == $total2){
    $algo = "SSTF";
    include './diskSchedulingAlgo/SSTF.php';

    $dataPoints = array();
     $y = 10;
  	 $x = $name;
  	 array_push($dataPoints, array("x" => $x, "y" => $y));
  }
  elseif ($min_total == $total3) {
    $algo = "Scan";
    include './diskSchedulingAlgo/Scan.php';
    $dataPoints = array();
    $y = 10;
  	$x = $name;
  	array_push($dataPoints, array("x" => $x, "y" => $y));
  }
  elseif ($min_total == $total4) {
    $algo = "CScan";
    include './diskSchedulingAlgo/CScan.php';
    $dataPoints = array();
    $y = 10;
  	$x = $name;
  	array_push($dataPoints, array("x" => $x, "y" => $y));
  }
  elseif ($min_total == $total5) {
    $algo = "Look";
    include './diskSchedulingAlgo/Look.php';
    $dataPoints = array();
    $y = 10;
  	$x = $name;
  	array_push($dataPoints, array("x" => $x, "y" => $y));
  }
  elseif($min_total == $total6) {
    $algo = "C-Look";
    include './diskSchedulingAlgo/CLook.php';
    $dataPoints = array();
    $y = 10;
  	$x = $name;
  	array_push($dataPoints, array("x" => $x, "y" => $y));
  }
  else { }

?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	axisX:{
		title: "Head Locations"
	},
	data: [{
		type: "line",
		xValueFormatString: "#,##0.0#",
		toolTipContent: "{x}",
		dataPoints: dataPoints
	}]
});
chart.render();

var updateInterval = 1500;
setInterval(function () { updateChart() }, updateInterval);

var xValue = dataPoints.length;
var yValue = dataPoints[dataPoints.length - 1].y;
var arr = <?php echo json_encode($final, JSON_NUMERIC_CHECK); ?>;
var iValue = 1;

function updateChart() {
  if(iValue != arr.length){
    xValue = arr[iValue];
  	yValue += 10;
  	dataPoints.push({ x: xValue, y: yValue });
  	iValue++;
  	chart.render();
  }
};
}
</script>
<style>
  h2 {
    text-align: center;
  }

  body {
    background-color: #EEE;
    font-family: Georgia;
  }
</style>
</head>
<body>
<h2><?php echo "$algo " ?> Disk Scheduling Algorithm </h2>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<h2><?php echo "Total head movement = ".$total ?></h2>
</body>
</html>
