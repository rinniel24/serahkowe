<head>
<title>Latihan Menentukan Nama Hari</title>
</head>
Hari ini:
<?php
$nama_hari=date("l");
switch($nama_hari)
{
 case "Sunday";
  print("Minggu");
  break;
 Case "Monday";
  print("Senin");
   break;
 Case "Tuesday";
  print("Selasa");
  break;
 Case "Wednesday";
  print("Rabu");
  break;
 Case "Thursday";
  print("Kamis");
  break;
 Case "Friday";
  print("Jumat");
  break;
 default:
  print("Sabtu");
}
?>
</body>
</html>