<?php
   function kembalian($belanja,$uang){
     $pecahan = [500,1000,2000,5000,10000,20000,50000];
    
     $kembalian = $uang-$belanja;
     $pecahanKembalian = [];
   
  
   for($i = count($pecahan)-1; $i >= 0; $i--){
     while($kembalian >= $pecahan[$i]){
       $kembalian -= $pecahan[$i];
       $pecahanKembalian[] = $pecahan[$i];
     }
 
   }
         
     return $pecahanKembalian;
 }
 
 
 var_dump(kembalian(23500, 70000));
 
 ?>