<html>
<head>
<title>Contoh untuk Memperlihatkan Efek break</title>
</head>
<body>
 <?php
  for($i=1;$i<=25;$i++)
  {
   print("$i<BR>\n");
   
   if($i==10)
     break;
  }
  print("Selesai<BR>\n");
 ?>
</body>
</html>