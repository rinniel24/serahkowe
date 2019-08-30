<html>
<head>
<script>
function showHint(str){
  if(str.length == 0){
    document.getElementByld("txtHint").innerHTML="";
	return;
  }else{
    var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	 if(this.readyState == 4 && this.status == 200({
	  document.getElementByld("txtHint").innerHTML = this.responseText;
	 }
	};
	xmlhttp.open("GET","data.php?q=" + str,true);
	xmlhttp.send();
  }
}
</script>
</head>
</body>

<p><b>masukkan kunci:</b></p>
<form>
Nama: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Tawaran: <span id="txtHint"></span></p>
</body>
</html>