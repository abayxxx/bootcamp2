<?php
   //diketahui
   $iguana = 2169; //total iguana awal
   $totalHari = 276; // lama hari yang di minta
   $mati = 0.111; // jumlah iguana mati sebelum melahrikan
   $hariMelahirkan = 92; // hari iguana melahirkan 
   
   
   while($hariMelahirkan < $totalHari){
    $iguana += 2169; //jumlah iguana sesuai looping
    $mati += 0.111; // jumlah persentase selama melahirkan
    
    $totalMati = $iguana * $mati; // total iguana mati selama melahirkan
    $totalIguana = floor($iguana - $totalMati); // total semua iguana selama 276 hari
    $hariMelahirkan += 92; //increment
   }
   
   
   
  
     echo "Total Iguana adalah ". $totalIguana;

 ?>