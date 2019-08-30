<!DOCTYPE html>
<html>
<style>
table,th,td {
border : 1px solid black;
border-collapse: collapse;
}
th,td {
padding: 5px;
}
</style>
<body>
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Mengambil XML excel</button>
<br><br>
<table id="demo"></table>
<script>
function loadDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
myFunction(this);
}
};
xhttp.open("GET", "tabel.xml", true);
xhttp.send();
}
function myFunction(xml) {
var i;
var xmlDoc = xml.responseXML;
var table="<tr><th>no</th><th>NIM</th><th>Nama</th><th>1</th><th>2</th><th>3</th><th>rata</th></tr>";
var x = xmlDoc.getElementsByTagName("data");
for (i = 0; i <x.length; i++) {
table += "<tr><td>" + x[i].getElementsByTagName("no")[0].childNodes[0].nodeValue + "</td><td>" + x[i].getElementsByTagName("NIM")[0].childNodes[0].nodeValue+ "</td><td>" + x[i].getElementsByTagName("Nama")[0].childNodes[0].nodeValue + "</td><td>" + x[i].getElementsByTagName("nilai1")[0].childNodes[0].nodeValue + "</td><td>" + x[i].getElementsByTagName("nilai2")[0].childNodes[0].nodeValue + "</td><td>" + x[i].getElementsByTagName("nilai3")[0].childNodes[0].nodeValue + "</td><td>" + x[i].getElementsByTagName("RATA")[0].childNodes[0].nodeValue + "</td></tr>";
} 
document.getElementById("demo").innerHTML = table;
}
</script>
</body>
</html>