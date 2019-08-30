<html>
 <body>
	<?php
		/* First method to associate create array. */
		$salaries = array("Ellisa" => 2000, "Elsa" => 1000, "Nadia" => 500);
		
		echo "Salary of Ellisa is".$salaries['Ellisa']."<br/>";
		echo "Salary of Elsa is".$salaries['Elsa']."<br/>";
		echo "Salary of Nadia is".$salaries['Nadia']."<br/>";
		
		/* Second method to create array. */
		$salaries['Ellisa'] = "high";
		$salaries['Elsa'] = "Medium";
		$salaries['Nadia'] = "low";
		
		echo "Salary of Ellisa is".$salaries['Ellisa']."<br/>";
		echo "Salary of Elsa is".$salaries['Elsa']."<br/>";
		echo "Salary of Nadia is".$salaries['Nadia']."<br/>";
	?>
 </body>
</html>