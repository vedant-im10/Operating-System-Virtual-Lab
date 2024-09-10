<?php
 $name = $_REQUEST["name"];
 $str = $_REQUEST["arr"];
 $maximum = $_REQUEST["maximum"];
 $minimum = $_REQUEST["minimum"];
 $algo = $_REQUEST["algo"];
 $str_arr = explode(",",$str);

 if($algo=="FCFS"){
      FCFS($name,$str_arr);
 }
 if($algo=="SSTF"){
      SSTF($name,$str_arr);
 }
 if($algo=="SCAN"){
      SCAN($name,$str_arr,$maximum);
 }
 if($algo=="CSCAN"){
      CSCAN($name,$str_arr,$maximum,$minimum);
 }
 if($algo=="LOOK"){
      LOOK($name,$str_arr);
 }
 if($algo=="CLOOK"){
      C_Look($name,$str_arr);
 }

 function FCFS($n,$str){
   $name = $n;
 	 $str_arr = $str;
   include './FCFS2.php';
   for($i=0;$i <count($final);$i++){
     echo "$final[$i] ";
   }
   echo "$total";
 }

 function SSTF($n,$str){
   $name = $n;
 	 $str_arr = $str;
   include './SSTF.php';
   for($i=0;$i <count($final);$i++){
       echo "$final[$i] ";
   }
   echo "$total";
 }

function SCAN($n,$str,$m){
  $name = $n;
  $str_arr = $str;
  include './Scan.php';
  for($i=0;$i <count($final);$i++){
      echo "$final[$i] ";
  }
  echo "$total";
}

function CSCAN($n,$str,$m,$mi){
  $name = $n;
  $str_arr = $str;
  include './CScan.php';
  for($i=0;$i <count($final);$i++){
    echo "$final[$i] ";
  }
  echo "$total";
}

function Look($n,$str){
  $name = $n;
  $str_arr = $str;
  include './Look.php';
  for($i=0;$i <count($final);$i++){
    echo "$final[$i] ";
  }
  echo "$total";
}

function C_Look($n,$str){
  $name = $n;
  $str_arr = $str;
  include './CLook.php';
  for($i=0;$i <count($final);$i++){
    echo "$final[$i] ";
  }
  echo "$total";
}
?>
