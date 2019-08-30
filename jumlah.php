<html>
<head>
<title>Contoh Operasi dengan ++ dan --</title>
</head>
<body>
 <?php
  print("Efek ++ sebagai akhiran :<BR>\n");
  $x=77;
  print("x = $x<BR>\n");
  print(2+$x++); print("<BR>\n");
  print("x=$x<BR>\n");
 
  print("Efek ++ sebagai awalan :<BR>\n");
  $x=77;
  print("x = $x<BR>\n");
  print(2+ ++$x); print("<BR>\n");
  print("x=$x<BR>\n");
 
  print("Contoh operasi dengan -- :<BR>\n");
  $x=77;
  print("x=$x<BR>\n");
  $x--;
  print("x=$x<BR>\n");
 ?>
</body>
</html>