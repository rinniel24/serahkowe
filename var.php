<html>
<head>
<title>Contoh Penaikan Isi variabel</title>
</head>
<body>

  <?php
  $gaji = 2000000;
  printf("Gaji semula = %d<BR>\n",$gaji);
  
  $gaji = 1.5 * $gaji;
  printf("Gaji sekarang = %d<BR>\n",$gaji);
 ?>
</body>
</html>