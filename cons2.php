<html>
<head>
<tilte>Efek Pernyataan continue</title>
</head>
<body>
 <?php
  for($i=1;<=5;$i++)
  {
   print("Proses fro. Iterasi ke-$i<BR>\n");
   fro($j=1;$j<=5;$j++)
   {
    if($j==3)
	  continue 2;
	  
	print($j);
   }
   print("<BR>\n");
  }
 ?>
</body>
</html>