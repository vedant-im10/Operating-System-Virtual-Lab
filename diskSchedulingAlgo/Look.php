<?php
	array_push($str_arr,$name);
	sort($str_arr);
	$total = 0;
	$i = 0;
	$final = array();
	$index = array_search($name,$str_arr,true);
	$len = count($str_arr);
	for($i=$index ; $i<$len ; $i++){
 		if($i != $index){
	 		$total = $total + (int)$str_arr[$i] - (int)$str_arr[$i - 1];
	 		array_push($final,(int)$str_arr[$i]);
 		}
	}
	for($i= $index-1 ; $i>=0 ; $i--){
 		if($i == $index-1){
	 		$total = $total + (int)$str_arr[$len - 1] - (int)$str_arr[$i];
 		}
 		else{
	 		$total = $total + (int)$str_arr[$i+1] - (int)$str_arr[$i];
 		}
 		array_push($final,(int)$str_arr[$i]);
	}
	array_splice($final,0,0,$name);
?>
