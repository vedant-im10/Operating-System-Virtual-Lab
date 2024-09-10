<?php
  array_splice($str_arr,0,0,$name);

  $total = 0;
  $i = 0;
  $final = array();
  $len = count($str_arr);
  for($i=0 ; $i<$len ; $i++){
    if($i != 0){
      if($str_arr[$i] > $str_arr[$i-1]){
        $total = $total + (int)$str_arr[$i] - (int)$str_arr[$i - 1];
      }
      else{
        $total = $total + (int)$str_arr[$i-1] - (int)$str_arr[$i];
      }
      array_push($final,(int)$str_arr[$i]);
    }
  }
array_splice($final,0,0,$name);
?>
