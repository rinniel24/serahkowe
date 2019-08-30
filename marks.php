<html>
 <body>
  <?php
   $marks = array(
    "dodi" => array(
	 "physics" =>35,
	 "maths" =>30,
	 "chemistry" =>39
	),
	"bimo" => array(
	 "physics" =>30,
	 "maths" =>32,
	 "chemistry" =>29
	),
	"nadia" => array(
	 "physics" =>31,
	 "maths" =>22,
	 "chemistry" =>39
	)
  );
  echo "Marks for dodi in physics: ";
  echo $marks['dodi']['physics']."<br/>";
  echo "Marks for bimo in maths: ";
  echo $marks['bimo']['maths']."<br/>";
  echo "Marks for nadia in chemistry: ";
  echo $marks['nadia']['chemistry']."<br/>";
 ?>
 </body>
</html>