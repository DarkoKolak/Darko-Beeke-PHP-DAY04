<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="content">
<h1>Sooooooongs</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<div id="songs">
	<table class='table table-dark' id="tablee"></table>
</div>

<script>
function loadDoc() {
 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
   	myfunction(this);
   }
 };
 xhttp.open("GET", "songs.xml", true);
 xhttp.send();
}

function myfunction(xml){
	var i; 
	var beeke = xml.responseXML;
	var table = "<tr><th><b>TITLE</b></th><th><b>ARTIST</b></th><th><b>COUNTRY</b></th><th><b>GENRE</b></th><th><b>YEAR</b></th></tr>";
	var darko = beeke.getElementsByTagName("song");
	console.log(darko);
	for (i=0;i<darko.length;i++){
		table+="<tr><td>"+darko[i].getElementsByTagName("title")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("artist")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("country")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("genre")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("year")[0].childNodes[0].nodeValue+"</td></tr>";
	} 
document.getElementById("tablee").innerHTML=table;
}
</script>
</body>
</html>