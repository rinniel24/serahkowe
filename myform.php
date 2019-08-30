<?php
if ($_POST['formSubmit'] = 'Submit') {
$varMovie = $_POST['Masukkan Nilai'];
echo $varMovie;
}
?>
<form action="myform.php" method="post">
 Masukkanasukkan Nilai
<input type="text" name="name" maxlength="50">
<input type="submit" name="formSubmit" value="Submit">
</form>