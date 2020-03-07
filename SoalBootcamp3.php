<?php

$string = ['D','U','M','B','W','A','Y','S','I','D'];


function drawLine($word){
  


  for($b=0; $b<count($word)-5; $b++){
    for($j=1; $j<=$b; $j++){
      echo"=";
    }for($b1=$b; $b1<$j; $b1++){
      echo $word[$b1];
    }for($b2=5; $b2 > $b1; $b2--){
      echo "=";
    }for($b3=5; $b3 > $b2; $b3--){
      echo "=";
    }for($b4=$b; $b4<$j; $b4++){
      echo $word[$b4];
    }for($b5=1; $b5 <= $b; $b5++){
      echo "=";
    }
    echo "\n";
  }
    
    for($a=5; $a<count($word); $a++){
     for($j=9; $j > $a; $j--){
       echo "=";
     }for($b1=$a; $b1>=$j; $b1--){
       echo $word[$b1];
     }for($b2=6; $b2 <= $a; $b2++){
       echo "=";
     }for($b3=6; $b3 <= $a; $b3++){
       echo "=";
     }for($b4=$a; $b4>=$j; $b4--){
       echo $word[$b4];
     }for($b5=8; $b5 > $b4; $b5--){
       echo "=";
     }
     echo "\n";
    }
 }
 
 
 
 
 drawLine($string);
 

 ?>