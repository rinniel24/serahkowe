<?php
 $peserta = array
	("PHP" => array("Anto","Edi","Sita"),
	 "Delphi" => array("Anto","Rina"),
	 "MySQL" => array("Nana","Dito","Ika","Setia"),
	 "C++" => array("Ika","Sari","Joned"),
	 "PERL" => array("Nana","Irvan"));
	 
  while(list($indeks1, $nilai1) = each($peserta)){
	print("Peserta $indeks1 : <BR>\n"); $nomor=1;
	while(list($indeks2, $nilai2) = each($nilai1)) {
		print("$nomor.$nilai2<BR>\n");
		$nomor++;
	}}
?>