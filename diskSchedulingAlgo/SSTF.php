<?php
	array_push($str_arr,$name);
	sort($str_arr);

	$total = 0;
	$i = 0;
	$final = array();
	$index = array_search($name,$str_arr,true);
	$len = count($str_arr);
	$lenf = count($str_arr);
	$diff_l=0; $diff_r=0;
	array_push($final,(int)$str_arr[$index]);
	while(count($final) < $lenf){
	 	if($index != 0 and $index != ($len - 1) ){
		 	$diff_l = abs((int)$str_arr[$index] - (int)$str_arr[$index - 1]);
		 	$diff_r = abs((int)$str_arr[$index] - (int)$str_arr[$index + 1]);
	 	}
		elseif($index == 0){
			$diff_l = 100;
			$diff_r = 1;
	 	}
		elseif($index == ($len - 1)){
		 	$diff_l = 1;
			$diff_r = 100;
	 	}else{
			echo'No';
		}
	 if($diff_l >= $diff_r){
			array_push($final,(int)$str_arr[$index + 1]);
	 		for($i=$index ; $i<$len - 1; $i++){
				$str_arr[$i]=$str_arr[$i + 1];
	 		}
			$len = $len -1;
	 }
	 else{
			array_push($final,(int)$str_arr[$index - 1]);
	 		for($i=$index ; $i<$len - 1; $i++){
				$str_arr[$i]=$str_arr[$i + 1];
			}
			$len = $len -1;
			if($index != 0){
				$index = $index - 1;
			}
		}
	}
	for($i=0 ; $i< $lenf - 1 ; $i++){
		$total = $total + abs ((int)$final[$i] - (int)$final[$i + 1]);
	}
?>
