<?php
 //Data array
 $buah1["A"]="Nanas";$buah1["E"]="Pepaya";$buah1["C"]="Mangga";$buah1["F"]="Apel";
 
 print("Data Asli: ");
 while(list($indeks,$nilai)=each($buah1))print("[$indeks]-> $nilai");
 print("<BR>\n");
 
 //Pengurutan dengan asort
 $buah2=$buah1;
 asort($buah2);
 print("Hasil asort: ");
 while(list($indeks, $nilai)=each($buah2)) print("[$indeks] -> $nilai");
 print("<BR>\n");
 
 //pengurutan dengan arsort
 $buah2=$buah1;
 arsort($buah2);
 print("Hasil arsort: ");
 while(list($indeks, $nilai)=each($buah2)) print("[$indeks] -> $nilai");
 print("<BR>\n");
 
 //Pengurutan dengan krsort
 $buah2=$buah1; krsort($buah2); print("Hasil krsort: ");
 while (list($indeks,$nilai)=each($buah2)) print("[$indeks] -> $nilai");
  print("<BR>\n");
  
 //Pengurutan dengan krsort
 $buah2=$buah1; krsort($buah2); print("Hasil krsort: ");
 while (list($indeks,$nilai)=each($buah2)) print("[$indeks] -> $nilai");
  print("<BR>\n");
  
 //Pengurutan dengan rsort
 $buah2=$buah1; rsort($buah2); print("Hasil rsort: ");
 while (list($indeks,$nilai)=each($buah2)) print("[$indeks] -> $nilai");
  print("<BR>\n");
  
 //Pengurutan dengan sort
 $buah2=$buah1; sort($buah2); print("Hasil sort: ");
 while (list($indeks,$nilai)=each($buah2)) print("[$indeks] -> $nilai");
  print("<BR>\n"); 
?>