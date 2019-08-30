<?php
 function hitung(){
  static $pencacah = 0;
  return ++$pencacah;
 }
 
 printf("%d<BR>\n", hitung());
 printf("%d<BR>\n", hitung());
 printf("%d<BR>\n", hitung());
?>