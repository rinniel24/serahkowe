<htm>
<head>
<title>Efek Peniadaan break pada switch</title>
</head>
 <?php
  $nama_hari=date("l");
  switch($nama_hari)
  {
   case"Monday":
   case"Tuesday":
   case"Wednesday":
   case"Thursday":
   case"Friday":
    print("Hari kerja");
    break;
   case"Saturday":
   case"Sunday":
    print("Hari libur");
  }
 ?>
</body>
</htmh>