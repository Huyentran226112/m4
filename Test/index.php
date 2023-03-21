<?php
function tinh_tong($a,$b){
   $c= $a+$b;
  return $c;
}
$a='7';
$b=3;
$your_output =tinh_tong($a,$b);
$expect_output =10;
if($your_output==$expect_output){
    echo 'true';
}else{
    echo 'false';
}